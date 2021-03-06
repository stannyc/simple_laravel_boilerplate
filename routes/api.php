<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('API')->name('api')->group(function () {
    Route::namespace('V1')
        ->prefix('v1')
        ->name('v1')
        ->group(function () {
            

            /**
             * v1 Public API Routes
             */
            Route::get('/', function () {
                return response('Api v1');
            })->name('home');




            /**
             * v1 Protected Api Routed
             */
            Route::middleware('auth:sanctum')->group(function(){

            });


        });
});
