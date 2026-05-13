<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Layups;
use App\Models\Layers;
use Exception;
use Illuminate\Http\Request;
// use Illuminate\Validation\ValidationException;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    public function layups($id){
        $supply = Supplier::findOrFail($id);
        $layups = Layups::with('layers')->where('supplier_id', $id)->get();
        return view('supplier.layups', compact('supply', 'layups'));
    }

    public function create(Request $request){
        try{
            $validated = $request->validate(['name' => 'required|min:5']);

            Supplier::create($validated);

            return redirect()->back()->with('success', 'New supplier has been added.');
        }catch(\Illuminate\Validation\ValidationException $e){
            return redirect()->back()->with('warning', 'Data Invalid: '.$e->getMessage());
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Error: '.$e->getMessage());
        }
    }

    public function edit(Request $request, $id){
        try{
            $request->validate(['name' => 'required']);

            $updateSupplier = Supplier::findOrFail($id);

            $updateSupplier->update(['name' => $request->name]);
            return redirect()->back()->with('success', 'Data supplier has been updated.');
        }catch(\Illuminate\Validation\ValidationException $e){
            return redirect()->back()->with('warning', 'Data Invalid: '.$e->getMessage());
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Error: '.$e->getMessage());
        }
    }
}
