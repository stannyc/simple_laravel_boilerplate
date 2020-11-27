<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes: CONTAINS ALL ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/



//Route::namespace('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboard', [DashboardController::class, 'index']);
    });



    Route::get('/test', function(){
        return response(Auth::check());
    });


    Route::get('/register', function () {
        return response("redirect");
    });
//});
