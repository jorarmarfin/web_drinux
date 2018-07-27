<?php

namespace App\Providers;

use App\Http\ViewComposers\VariablesGlobales;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['templates.partials.header','templates.partials.footer2',
            'templates.partials.footer1','templates.page','templates.index'],
                VariablesGlobales::class
            );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
