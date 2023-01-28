<?php
namespace Nabil\StoreDataRequests;

use Illuminate\Support\ServiceProvider;

class StoreDataRequests extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../stubs' => base_path('stubs'),
        ]);
    }
    public function register()
    {
        // 
    }
}
