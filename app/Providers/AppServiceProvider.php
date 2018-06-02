<?php

namespace App\Providers;
use App\Category;
use View;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        //Category  Start
        View::composer('*', function($View){
            $data = Category::all();
            $View->with('all_category', $data);
        });
        //Category End
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
