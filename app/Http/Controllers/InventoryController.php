<?php

namespace App\Http\Controllers;

use League\Csv\Reader;
use League\Csv\Exception;
use Illuminate\Support\Facades\Log;

use App\Models\Supplier;
use App\Models\Layups;
use App\Models\Layers;

use Illuminate\Http\Request;

class InventoryController extends Controller{
    public function index(){
        $supplier = Supplier::all();
        $layups = Layups::with(['supplier', 'layers'])->get();
        return view('inventory.index', compact('layups', 'supplier'));
    }

    public function layers(){
        $layup = Layups::with('layers')->firstOrFail();
        return view('inventory.layers', compact('layup'));
    }

    public function check(Request $request){
        $request->validate([
            'import_file' => 'required|file|max:2048|mimes:csv,txt,json',
            'name' => 'required',
            'supplier_id' => 'required|exists:suppliers,id'
        ]);

        $file = $request->file('import_file');
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalName . '.csv';
        $incomingLayup = $request->name;
        $supplierId = $request->supplier_id;

        try {
            $csv = Reader::createFromPath($file->getPathname(), 'r');
            $csv->setHeaderOffset(0);
            $records = iterator_to_array($csv->getRecords(), false);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        $incomingLayers = collect($records)->map(function ($row) {
            return [
                'layers_order' => $row['layers_order'],
                'thickness' => $row['thickness'],
                'width' => $row['width'],
                'angle' => $row['angle'],
            ];
        });

        $existingLayup = Layups::where('supplier_id', $supplierId)
            ->where('name', $incomingLayup)
            ->first();


        session([
            'parsed_layers' => $incomingLayers->toArray(),
            'layup_name' => $incomingLayup,
            'supplier_id' => $supplierId,
        ]);


        if (!$existingLayup) {
            return back()->with([
                'analysis_success' => true,
                'ready_import' => true,
                'fileName' => $fileName
            ]);
        }

        $conflicts = [];

        foreach ($incomingLayers as $incomingLayer) {
            $existingLayer = Layers::where('clt_layup_id', $existingLayup->id)
                ->where('layers_order', $incomingLayer['layers_order'])
                ->first();

            if ($existingLayer) {
                $hasConflict =
                    $existingLayer->thickness != $incomingLayer['thickness'] ||
                    $existingLayer->width != $incomingLayer['width'] ||
                    $existingLayer->angle != $incomingLayer['angle'];

                if ($hasConflict) {
                    $conflicts[] = [
                        'existing' => $existingLayer,
                        'incoming' => $incomingLayer
                    ];
                }
            }
        }

        $totalConflicts = count($conflicts);

        if (count($conflicts)) {
            session([
                'conflicts' => $conflicts,
                'fileName' => $fileName,
                'totalConflicts' => $totalConflicts
            ]);

            return back()->with('open-modal-three', true);
        }

        return back()->with([
            'analysis_success' => true,
            'ready_import' => true,
            'fileName' => $fileName
        ]);
    }


    public function import_confirm(){
        $layers = session('parsed_layers');
        $layupName = session('layup_name');
        $supplierId = session('supplier_id');

        if (!$layers || !$layupName || !$supplierId) {
            return back()->with('error', 'No import data found.');
        }

        $layup = Layups::create([
            'name' => $layupName,
            'supplier_id' => $supplierId
        ]);

        foreach ($layers as $layer) {
            Layers::create([
                'clt_layup_id' => $layup->id,
                'layers_order' => $layer['layers_order'],
                'thickness' => $layer['thickness'],
                'width' => $layer['width'],
                'angle' => $layer['angle']
            ]);
        }

        session()->forget([
            'parsed_layers',
            'layup_name',
            'supplier_id'
        ]);

        return back()->with('success', 'Layup imported successfully.');
    }

    public function resolveConflict(Request $request){
        $action = $request->action;
        $conflicts = session('conflicts', []);

        if (empty($conflicts)) {
            return back()->with('error', 'No conflicts found.');
        }

        foreach ($conflicts as $conflict) {
            $existing = Layers::find($conflict['existing']['id']);

            if (!$existing) {
                continue;
            }

            if ($action === 'accept_incoming') {
                $existing->update([
                    'thickness' => $conflict['incoming']['thickness'],
                    'width' => $conflict['incoming']['width'],
                    'angle' => $conflict['incoming']['angle'],
                ]);
            }

            // keep_existing = do nothing
        }

        session()->forget([
            'conflicts',
            'fileName',
            'totalConflicts'
        ]);

        return back()->with('success', 'Conflict resolved successfully.');
    }

    public function import(Request $request){
        $request->validate([
            'import_file' => 'required|file|max:2048|mimes:csv,txt,json',
            'name' => 'required'
            ]);

        $layupsFile = $request->file('import_file');

        try {
            $tmpPath = $layupsFile->getPathname();

            $csv = Reader::createFromPath($tmpPath, 'r');
            $csv->setHeaderOffset(0);
            $csv->setDelimiter(',');

            $records = iterator_to_array($csv->getRecords(), false);

        } catch (Exception $e) {
            Log::error('CSV parsing failed: '.$e->getMessage());
            return back()->with('error', 'Gagal membaca CSV: '.$e->getMessage());
        }

        dd($records);
    }
}

