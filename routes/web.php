<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;

Route::get('/',  'MeasurementController@index');

Route::resource('measurement', 'MeasurementController');
