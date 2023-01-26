<?php

use App\Http\Controllers\VentaController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente/registrar', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('cliente/guardar', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/listar', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('direccion/registrar', [DireccionController::class, 'create'])->name('direccion.create');
Route::post('direccion/guardar', [DireccionController::class, 'store'])->name('direccion.store');
Route::get('direccion/listar', [DireccionController::class, 'index'])->name('direccion.index');

Route::get('venta/registrar', [VentaController::class, 'create'])->name('venta.create');
Route::post('venta/guardar', [VentaController::class, 'store'])->name('venta.store');
Route::get('venta/listar', [VentaController::class, 'index'])->name('venta.index');
