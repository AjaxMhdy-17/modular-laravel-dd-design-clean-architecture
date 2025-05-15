<?php 

namespace Modules\Order\Providers ;

use Closure;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider{


    // public function register()
    // {
        
    // }


    public function boot( )
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->mergeConfigFrom(__DIR__. '/../config.php','order') ; 
        $this->app->register(RouteServiceProvider::class);

        // $this->app->register();
        // $this->bind->register();
    }

}