<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes: CONTAINS ALL ADMIN ROUTES
|--------------------------------------------------------------------------
|
*/



Route::namespace('admin')->group(function () {
    Route::get('/', function () {
        return response('admin root');
    });
});
