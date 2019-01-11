<?php

namespace Hobby\ExOption;

use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class ExOptionServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ExOptionExtension $extension)
    {
        if (! ExOptionExtension::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'exoption');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/exoption')],
                'exoption'
            );
        }

        $this->app->booted(function () {
            //ExOption::routes(__DIR__.'/../routes/web.php');
            Form::extend('exoption', ExOption::class);
            Form::extend('exfooter', ExFooter::class);
            Form::extend('exheader', ExHeader::class);
        });
    }
}