<?php

namespace Hankin\LaravelComment;

use Illuminate\Support\ServiceProvider;

class LaravelCommentServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (! class_exists('CreateCommentsTable')) {
            $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');
        }
        //$this->publishConfig();
    }

    /**
     * Register package services.
     *
     * @return void
     */
    public function register()
    {
//        parent::register();
 //       $this->mergeConfig();
    }
}
