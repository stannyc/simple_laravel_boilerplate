<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Bouncer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /**
         * Enable bouncher cross-request caching
         * Good for performance on stable version deployed on production environment
         */
        //Bouncer::cache();

        /**
         * Disable bouncher caching. Good during development; 
         * TODO[Stanny] DISABLE THIS ON PRODUCTION
         */
        Bouncer::dontCache();


        /**
         * Fix stupid error about string length on some machine
         * Uncomment to enable
         */

        //Schema::defaultStringLength(191);
    }
}
