<?php

use App\Http\Controllers\EmpleadosController;
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



Route::get('/', [EmpleadosController::class, 'index'])->name('empleados.index');
Route::get('/create', [EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/store', [EmpleadosController::class, 'store'])->name('empleados.store');
Route::get('/edit/{id}', [EmpleadosController::class, 'edit'])->name('empleados.edit');
Route::put('/update/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');
Route::get('/show/{id}', [EmpleadosController::class, 'show'])->name('empleados.show');
Route::delete('/destroy/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');

