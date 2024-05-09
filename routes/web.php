<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;

Route::resource('Measurement', MeasurementController::class);
Route::delete('/measurements/{measurement}', [MeasurementController::class, 'destroy'])->name('measurement.destroy');
