<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route; // Pastikan ini ada

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //pasang middle ware
        // Route::middleware([
        //     'admin'     => \App\Http\Middleware\AdminMiddleware::class,
        //     'auth'      => \App\Http\Middleware\AuthMiddleware::class,
        //     'guest'     => \App\Http\Middleware\GuestMiddleware::class,
        // ]);
    }
}
