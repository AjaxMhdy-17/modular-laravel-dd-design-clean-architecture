<?php 

namespace Modules\Order\Providers ;

use Closure;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\Order\ViewComponent\Alert;

class OrderServiceProvider extends ServiceProvider{


    // public function register()
    // {
        
    // }


    public function boot( )
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Databases/Migrations');
        $this->mergeConfigFrom(__DIR__. '/../config.php','order') ; 
        $this->app->register(RouteServiceProvider::class);
        $this->loadViewsFrom(__DIR__ . '/../Views','order') ; 

        Blade::anonymousComponentPath( __DIR__ . '/../Views/components','order');
        Blade::component('order-alert', Alert::class);

        // $this->app->register();
        // $this->bind->register();
    }

}