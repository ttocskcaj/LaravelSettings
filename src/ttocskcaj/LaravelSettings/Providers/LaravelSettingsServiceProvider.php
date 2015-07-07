<?php
namespace ttocskcaj\LaravelSettings\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelSettingsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../../../../config/laravel-settings.php';
        $this->publishes([$configPath => config_path('laravel-settings.php')], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../../../../config/laravel-settings.php';
        $this->mergeConfigFrom($configPath, 'laravel-settings');
    }


}
