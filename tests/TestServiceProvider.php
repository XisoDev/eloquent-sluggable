<?php namespace XisoDev\EloquentSluggable\Tests;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class TestServiceProvider
 *
 * @package XisoDev\EloquentSluggable
 */
class TestServiceProvider extends BaseServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(
            __DIR__ . '/database/migrations'
        );
    }
}
