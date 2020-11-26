<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes: CONTAINS ALL ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/



Route::namespace('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});
