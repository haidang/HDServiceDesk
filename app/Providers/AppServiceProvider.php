<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema; //Import Schema
use App\Models\MainModules;

use Illuminate\Foundation\AliasLoader;

class AppServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
  protected $config_fields = ['key','value'];
  public function boot()
  {
    Schema::defaultStringLength(191); //Solved by increasing StringLength
    view()->composer('layouts.partials.sidebar',function($view){
      $menus = MainModules::where('is_menu',1)->where('status',1)
        ->orderBy('sort')
        ->get();
      $view->with('menus',$menus);
    });
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {

  }
}
