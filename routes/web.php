<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;

Route::resource('Measurement', MeasurementController::class);
Route::delete('/measurements/{measurement}', [MeasurementController::class, 'destroy'])->name('measurement.destroy');
Route::get('/measurements/{measurement}', [MeasurementController::class, 'show'])->name('measurement.show');
Route::get('/measurements/{measurement}/edit', [MeasurementController::class, 'edit'])->name('measurement.edit');
Route::put('/measurements/{measurement}', [MeasurementController::class, 'update'])->name('measurement.update');
