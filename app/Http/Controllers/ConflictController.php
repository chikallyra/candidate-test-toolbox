<?php

namespace App\Http\Controllers;
use App\Models\Layers;

use Illuminate\Http\Request;

class ConflictController extends Controller
{
    public function resolveConflict(Request $request){
    $action = $request->action;
    $conflicts = session('conflicts', []);

    if (!$conflicts) {
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

        if ($action === 'keep_existing') {
            continue;
        }
    }

    return redirect()->back()->with('success', 'Conflict resolved successfully.');
}
}
