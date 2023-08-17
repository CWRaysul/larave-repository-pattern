<?php

use App\Http\Controllers\UnitController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('admin')->group(function () {

    Route::group(['prefix' => 'unit'], function () {
        Route::get('/', [UnitController::class, 'index'])->name('unit.index');
        Route::get('/create', [UnitController::class, 'create'])->name('unit.create');
        Route::post('/', [UnitController::class, 'store'])->name('unit.store');
        Route::get('/{id}/edit', [UnitController::class, 'edit'])->name('unit.edit');
        Route::Post('/{unit}/update', [UnitController::class, 'update'])->name('unit.update');
        Route::get('/{unit}/destroy', [UnitController::class, 'destroy'])->name('unit.destroy');
    });

    Route::group(['prefix' => 'supplier'], function () {
        Route::get('/', [SupplierController::class, 'index'])->name('supplier.index');
        Route::get('/create', [SupplierController::class, 'create'])->name('supplier.create');
        Route::post('/', [SupplierController::class, 'store'])->name('supplier.store');
        Route::get('/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
        Route::Post('/{supplier}/update', [SupplierController::class, 'update'])->name('supplier.update');
        Route::get('/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('supplier.destroy');
    });

    Route::group(['prefix' => 'order'], function () {
        // Route::get('/', [OrderController::class, 'index'])->name('unit.index');
        // Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        // Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        // Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        // Route::Post('/{category}/update', [CategoryController::class, 'update'])->name('category.update');
        // Route::get('/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
});

