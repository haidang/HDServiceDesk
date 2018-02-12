<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema; //Import Schema
use App\Models\MainConfigs;

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
    view()->composer('layouts.app',function($view){
      $configs = MainConfigs::all();
      $view->with('mainConfigs',$configs);
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
