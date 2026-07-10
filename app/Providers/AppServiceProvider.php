<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->environment('production')) {
            $url = config('app.url', 'http://localhost');

            if (!str_starts_with($url, 'https://')) {
                $url = 'https://invitacion-tarot.onrender.com';
            }

            config(['app.url' => $url]);
            URL::forceRootUrl($url);
            URL::forceScheme('https');
        }
    }
}
