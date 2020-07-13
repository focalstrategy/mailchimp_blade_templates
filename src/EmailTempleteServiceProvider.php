<?php

namespace FocalStrategy\EmailTemplate;

use Illuminate\Support\ServiceProvider;
use View;

class EmailTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $laravel_version = $this->getLaravelVersion();
        if ($laravel_version == 4) {
            $this->package('focalstrategy/email_template');
            View::addNamespace('email_template', __DIR__.'/views');
        } elseif ($laravel_version == 5) {
            $this->loadViewsFrom(__DIR__ . '/views', 'email_template');
            $this->publishes([__DIR__ . '/config/email_template.php' => config_path('email_template.php')], 'config');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    private function getLaravelVersion()
    {
        $version = $this->app['config']->get('email_template.laravel', '4.*');
        $version = explode('.', $version);
        switch ($version[0]) {
            case '4':
                return '4';
                break;
            case '5':
                return '5';
                break;
            default:
                return '4';
                break;
        }
    }
}
