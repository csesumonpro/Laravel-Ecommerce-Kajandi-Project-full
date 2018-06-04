<?php

namespace App\Providers;
use App\Category;
use App\Manufacter;
use App\Product;
use App\ProductModel;
use App\Subcategory;
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
            $data = Product::orderBy('id','desc')->get();
            $View->with('all_product', $data);
        });
        //Category End
        //Category  Start
        View::composer('*', function($View){
            $data = Category::orderBy('id','desc')->get();
            $View->with('all_category', $data);
        });
        //Category End
        //Manufacturer  Start
        View::composer('*', function($View){
            $data = Manufacter::orderBy('id','desc')->get();
            $View->with('all_manufacturer', $data);
        });
        //Manufacturer End
        //Sub Category  Start
        View::composer('*', function($View){
            $data = Subcategory::orderBy('id','desc')->get();
            $View->with('all_sub_category', $data);
        });
        //Sub Category  End
        //Product Model Start
        View::composer('*', function($View){
            $data = ProductModel::all();
            $View->with('all_product_model', $data);
        });
        //Product Model  End
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
