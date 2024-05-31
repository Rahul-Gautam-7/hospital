<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicinesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thala/trashed',[PatientController::class,'trashed'])->name('thala.trashed');
Route::post('/thala/recover/{id}',[PatientController::class,'recover'])->name('thala.recover');
Route::post('/thala/delete/{id}',[PatientController::class,'permanentDelete'])->name('thala.delete');


Route::resource('thala', PatientController::class);
Route::resource('med', MedicinesController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        
        return view('dashboard');
    })->name('dashboard');
});
