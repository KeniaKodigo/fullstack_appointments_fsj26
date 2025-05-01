<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//Route::get('/patients', [PatientController::class, 'index']);

//rutas con recursos (paquete de rutas) (GET, POST, PUT/PATCH, DELETE) (CRUD)
Route::resource('/patients', PatientController::class);

//ruta para el calendario
//rutas filtros de reportes

Route::get('/appointments/calendar', [AppointmentsController::class, 'index'])->name('appointments.calendar');

Route::get('/report/patients', [PDFController::class, 'getPatients'])->name('report.patients');
