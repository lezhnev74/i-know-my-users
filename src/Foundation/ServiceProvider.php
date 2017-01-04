<?php
namespace App\Foundation;

use App\Services\Api\Providers\ApiServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        // Register the service providers of your Services here.
        $this->app->register(ApiServiceProvider::class);
    }
}
