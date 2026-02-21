<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;

Route::resource('viaje', ViajeController::class);
Route::get('/', [ViajeController::class, 'index']);
