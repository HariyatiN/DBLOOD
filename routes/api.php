<?php

use App\Http\Controllers\API\DarahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Homecontroller;
use App\Http\Controllers\API\InfoController;
use App\Http\Controllers\API\PendonorController;
use App\Http\Controllers\API\DonorController;

Route::controller(Homecontroller::class)->group(function () {
    Route::get('/darah', 'getData');
  
});
Route::controller(InfoController::class)->group(function () {
    Route::get('/info', 'getData');
});

Route::controller(PendonorController::class)->group(function () {
    Route::get('/pendonor', 'getData');
    Route::get('/pendonor/{id}', );
    Route::get('/pendonor',  'createPendonor');
});
Route::controller(DonorController::class)->group(function () {
    Route::get('/donor', 'getData');
});


