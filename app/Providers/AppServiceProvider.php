<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class AppServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        // Filament::registerRenderHook(
        //     'body.start',
        //     fn () => view('livewire.site.top-nav')
        // );

        // Filament::registerRenderHook(
        //     'body.end',
        //     fn () => view('livewire.site.footer')
        // );
    }
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
    // public function boot(): void
    // {
    //     //
    // }
}
