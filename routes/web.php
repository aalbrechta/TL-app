<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;

Route::get('/', function () {
    return view('index');
});

Route::resource('Measurement', MeasurementController::class);
