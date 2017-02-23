<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer(
        ['widgets.home_news', 'widgets.contacts'],
        'App\Http\Composers\HomeComposer@compose'
      );
      view()->composer(
        ['widgets.home_categories','parts.footer', 'widgets.slider'],
        'App\Http\Composers\HomeComposer@categoriesCompose'
      );
      view()->composer(
        ['parts.sidebar_right'],
        'App\Http\Composers\SidebarComposer'
      );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
