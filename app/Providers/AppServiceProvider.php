<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator; // ⭐️ 追加

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //
    // }
      public function boot(UrlGenerator $url) // ⭐️ 引数追加
    {
        $url->forceScheme('https'); // ⭐️ 追加
    }
}
