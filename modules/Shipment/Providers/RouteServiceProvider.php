<?php

namespace Modules\Shipment\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends BaseRouteServiceProvider
{


    // public function register()
    // {

    // }


    public function boot()
    {
        $this->routes(function () {
            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group( __DIR__ . '/../routes.php');
        });
    }
}
