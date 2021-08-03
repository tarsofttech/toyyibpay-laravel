<?php

namespace Tarsoft\Toyyibpay;

use GuzzleHttp\Client;

use Illuminate\Support\ServiceProvider;

class ToyyibpayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/Toyyibpay.php',
            'toyyibpay'
        );

        $this->publishes([
            __DIR__ . '/config/Toyyibpay.php' => config_path('toyyibpay.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Toyyibpay', function ($app) {
            $client = new Client();

            return new Toyyibpay(
                config('toyyibpay.sandbox'),
                config('toyyibpay.client_secret'),
                config('toyyibpay.redirect_uri'),
                $client
            );
        });
    }
}
