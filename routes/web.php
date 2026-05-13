<?php

use App\Http\Controllers\LayersController;
use App\Http\Controllers\LayupsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ConflictController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('supplier')->name('supplier.')->group(function(){
    Route::get('/', [SupplierController::class, 'index'])->name('index');
    Route::get('/layups/{id}', [SupplierController::class, 'layups'])->name('layups');

    Route::post('/create', [SupplierController::class, 'create'])->name('create');
    Route::put('/edit/{id}', [SupplierController::class, 'edit'])->name('edit');
});

Route::post('/inventory/resolve-conflict', [ConflictController::class, 'resolveConflict'])->name('conflict.resolve');

Route::prefix('inventory')->name('inventory.')->group(function(){
    Route::get('/', [InventoryController::class, 'index'])->name('index');
    Route::get('/layers/{id}', [InventoryController::class, 'layers'])->name('layers');

    Route::post('/check', [InventoryController::class, 'check'])->name('check');
    Route::post('/import', [InventoryController::class, 'import'])->name('import');
    Route::post('/import/confirm', [InventoryController::class, 'import_confirm'])->name('import.confirm');

    Route::post('/resolve-conflict', [InventoryController::class, 'resolveConflict'])->name('conflict-resolve');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
