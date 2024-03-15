<?php

namespace App\Providers;

use App\Facades\CartFacade;
use App\Services\CartService;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cart', function ($app) {
            return new CartService();
        });
        
        // Alias the facade
        $this->app->alias('cart', CartFacade::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
