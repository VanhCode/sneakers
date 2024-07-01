<?php

namespace App\Providers;

use App\Http\DataComposers\AuthComposer;
use App\Http\DataComposers\CategoryComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', CategoryComposer::class);

        View::composer('*', AuthComposer::class);
    }
}
