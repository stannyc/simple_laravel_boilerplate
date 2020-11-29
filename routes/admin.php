<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes: CONTAINS ALL ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/



//Route::namespace('admin')->group(function () {
    Route::middleware('auth')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


        /**
         * Soal modules controller
         */



        /**
         * Staff modules routes
         */
        Route::get('/staff', [StaffController::class, 'index'])->name('staff');



         /**
          * Report modules controller
          */

    });



    Route::get('/test', function(){
        return response(Auth::check());
    });


    Route::get('/register', function () {
        return response("redirect");
    });


    Route::InertiaTable('user');

//});
