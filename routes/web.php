<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//Route::get('/patients', [PatientController::class, 'index']);

//rutas con recursos (paquete de rutas) (GET, POST, PUT/PATCH, DELETE)
Route::resource('/patients', PatientController::class);
