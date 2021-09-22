<?php

namespace ahmetbarut\PackageDevelopment\Provider;

use Illuminate\Support\ServiceProvider;

class LaravelIstanbulServiceProvider extends ServiceProvider
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
    public function boot()
    {
        // Burda 2 kere üst dizine çıkıp routes/web.php dosyasını yükleyecektir.
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../../view', 'laravelIstanbul');

        $this->loadMigrationsFrom(__DIR__.'/../../migrations');

    }
}
