<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */

    public $bidings = [];


    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    
    public $singletons = [
        // DowntimeNotifier::class => PingdomDowntimeNotifier::class,
        // ServerProvider::class => ServerToolsProvider::class,
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
