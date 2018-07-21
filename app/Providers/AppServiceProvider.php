<?php

namespace App\Providers;

use App\Cart;
use App\Category;
use App\Http\Controllers\HomeController;
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
        // используем встроенный визуальный композер laravel,
        // чтобы выводить на всех страницах одинаковые элементы,
        view()->composer('pages.header', function($view){
            $view->with('parent_categories', Category::all()->where('parent_id', '=', '0'));
            $view->with('categories', Category::all()->where('parent_id', '>', '0'));
            $view->with('count', Cart::countItemsInCart());
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
