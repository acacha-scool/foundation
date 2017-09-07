<?php

namespace Scool\Foundation\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
use Illuminate\Support\ServiceProvider;

/**
 * Class FoundationServiceProvider.
 *
 * @package App\Providers
 */
class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrations();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (!defined('SCOOL_FOUNDATION_PATH')) {
            define('SCOOL_FOUNDATION_PATH', realpath(__DIR__.'/../../'));
        }
    }

    /**
     * Load migrations.
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(SCOOL_FOUNDATION_PATH . '/database/migrations');
    }
}
