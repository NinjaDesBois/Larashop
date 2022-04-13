<?php

namespace App\Providers;

use App\Http\ViewComposers\HeaderComposer;
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
      // view()->composer('ad/admin',HeaderComposer::class);
      //  view()->composer('products/create',HeaderComposer::class);
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
