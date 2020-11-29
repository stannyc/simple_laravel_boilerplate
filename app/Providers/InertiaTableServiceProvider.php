<?php

namespace App\Providers;

use App\Http\Controllers\Inertable\InertableController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class InertiaTableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Create all the inertable routes
        Route::macro('InertiaTable', function ($routeName) {
            Route::prefix('/inertable')->group(function () use ($routeName) {
                Route::get('/'.$routeName.'', [InertableController::class, 'index'])->name('inertable.'.$routeName);
            });
        });
    }
}
