<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        View::share('menuItems', [
            [
                'title' => 'Фаьлгаш',
                'href' => '/tails'
            ],
            [
                'title' => 'Кицаш',
                'href' => '/kicash'

            ],
            [
                'title' => 'Байташ',
                'href' => '/poesy'
            ],
            [
                'title' => 'Сийдола нах',
                'href' => '/persons'
            ],
            [
                'title' => 'Видеош',
                'href' => '/video'
            ],
            [
                'title' => 'Дошлорг',
                'href' => '/dictionary'
            ],

            [
                'title' => 'Журналаш',
                'href' => '/magazines'
            ],
        ]);
    }
}
