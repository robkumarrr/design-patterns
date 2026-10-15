<?php

namespace App\Chapter5_SingletonPattern\Providers;

use App\Chapter5_SingletonPattern\Services\IMusicService;
use App\Chapter5_SingletonPattern\Services\SpotifyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class Ch5SingletonProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(IMusicService::class, function (Application $app) {
            return new SpotifyService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
