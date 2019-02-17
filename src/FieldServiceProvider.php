<?php

namespace Sanasol\NovaFieldRefreshExample;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Events\NovaServiceProviderRegistered;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-field-refresh', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-field-refresh', __DIR__.'/../dist/css/field.css');
        });
    }
}
