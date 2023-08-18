<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\AttributeValue;
use App\Models\Appearance;
use App\Models\Product;


class AppServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
      Schema::defaultStringLength(191);

      view()->composer('frontend.inc.nav', function ($view) {
        $view->with('events', Product::all());
      });


     
      
                  view()->composer('frontend.inc.footer', function ($view) {
        $view->with('abouts', Appearance::first());
      });
      
      view()->composer('frontend.inc.nav', function ($view) {
      $view->with('abouts', Appearance::first());
      });
      
         view()->composer('backend.layouts.app', function ($view) {
        $view->with('about', Appearance::first());
      });



    
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
