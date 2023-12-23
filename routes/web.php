<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DarahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;






Route::controller(AuthController::class)->group(function(){
            Route::get('/login', 'showLogin')->name('login');
            Route::post('/login', 'loginProcess');
            Route::post('/logout', 'logout');

});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
Route::prefix('admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');

    });
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin' , 'index');
        Route::get('/admins/detail/{admin}', 'detail');
        Route::get('admins/tambah' , 'tambah');
        Route::post('admins/tambah' , 'aksitambah');
        Route::get('/admins/edit/{admin}', 'edit');
        Route::post('/admins/edit/{admin}', 'aksiedit');
        Route::post('/admins/detail/{admin}', 'detail');
        Route::delete('/admins/{admin}' , 'delete');
    });


    Route::controller(DarahController::class)->group(function () {
        Route::get('/darah', 'index');
        Route::get('/darah/detail/{darah}', 'detail');
        Route::get('/darah/tambah', 'tambah');
        Route::get('/darah/edit/{darah}', 'edit');
        Route::post('/darah/edit/{darah}', 'aksiedit');



    });

    Route::controller(PendonorController::class)->group(function () {
        Route::get('/pendonor', 'index');
        Route::get('/pendonor/detail/{pendonor}', 'detail');
        Route::get('/pendonor/tambah', 'tambah');
        Route::post('/pendonor/tambah', 'aksitambah');
        Route::get('/pendonor/edit/{pendonor}', 'edit');
        Route::post('/pendonor/edit/{pendonor}', 'aksiedit');
        Route::delete('/pendonor/{pendonor}', 'delete');

    });


    Route::controller(InfoController::class)->group(function (){
        Route::get('/info', 'index');
        Route::get('/info/detail/{info}', 'detail');
        Route::get('/info/tambah', 'tambah');
        Route::post('/info', 'aksitambah');
        Route::get('/info/edit/{info}', 'edit');
        Route::post('/info/edit/{info}', 'aksiEdit');
        Route::delete('/info/{info}', 'delete');
    });


    Route::controller(DonorController::class)->group(function (){
        Route::get('/donor', 'index');


    });
    Route::controller(ProdukController::class)->group(function (){
        Route::post('/darah/tambah', 'aksitambah');


    });
    Route::controller(AuthController::class)->group(function(){

        Route::get('/logout', 'logout');

});


});

});


