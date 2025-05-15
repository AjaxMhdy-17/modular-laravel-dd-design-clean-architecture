<?php 

namespace Modules\Shipment\Providers ;

use Closure;
use Illuminate\Support\ServiceProvider;

class ShipmentServiceProvider extends ServiceProvider{


    // public function register()
    // {
        
    // }


    public function boot( )
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->mergeConfigFrom(__DIR__. '/../config.php','shipment') ; 
        $this->app->register(RouteServiceProvider::class);

        // $this->app->register();
        // $this->bind->register();
    }

}