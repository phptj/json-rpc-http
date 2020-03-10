<?php

namespace TangJun\JsonRpcHttp;

use Illuminate\Support\ServiceProvider;


class JsonRpcHttpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/rpc-services.php' => config_path('rpc-services.php'),
        ], 'config');

    }

}
