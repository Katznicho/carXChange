<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class DealerPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('dealer')
            ->path('dealer')
            ->login()
            ->registration()
            ->passwordReset()
            // verifyEmail()
            ->profile()
            ->emailVerification()
            ->default()
            ->colors([
                'primary' => Color::Blue,
            ])
            ->discoverResources(in: app_path('Filament/Dealer/Resources'), for: 'App\\Filament\\Dealer\\Resources')
            ->discoverPages(in: app_path('Filament/Dealer/Pages'), for: 'App\\Filament\\Dealer\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Dealer/Widgets'), for: 'App\\Filament\\Dealer\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                \App\Filament\Dealer\Widgets\DealerStatsOverview::class,
                \App\Filament\Dealer\Widgets\LatestCars::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->authGuard('dealer')
            ->authPasswordBroker('dealers');
    }
}
