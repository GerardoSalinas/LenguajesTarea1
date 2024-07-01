<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\DueniosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/propiedades/mostrar',[PropiedadesController::class, 'mostrarPropiedades']);

Route::get('/duenios/mostrar',[DueniosController::class, 'mostrarDuenios']);

Route::get('/duenios/agregar',[DueniosController::class, 'formularioAgregarDuenio']);

Route::post('/duenios/agregar/nuevo',[DueniosController::class, 'agregarDuenio'])->name('duenio.agregar');

Route::get('/duenios/ver/{id}',[DueniosController::class, 'verDuenio']);