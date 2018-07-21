<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/item/{slug}', 'ItemController@showItem')->name('item.show');
Route::post('/addCart', 'HomeController@addCart');
Route::post('/deleteCart', 'HomeController@deleteCart')->name('deleteCart');

Route::get('/contact', 'ContactController@index');
Route::post('/contactForm', 'ContactController@contactForm')->name('contactForm');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@show');

Route::get('/category/{slug}', 'CategoryController@category')->name('category.show');

Route::get('/cart', 'CartController@index');
Route::post('/order', 'CartController@order')->name('cartOrder');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', 'AuthController@logout');
    Route::get('/wishlist', 'HomeController@wishList');
    Route::get('/orders', 'CartController@orders');
    Route::post('/addReview', 'ReviewController@addReview');

    Route::get('/profile', 'UserController@index');
    Route::post('/updateProfile', 'UserController@update')->name('updateProfile');
    Route::post('/favorite/{slug}', 'UserController@favoriteItem');
    Route::post('/unfavorite/{slug}', 'UserController@unFavoriteItem');
    Route::get('/my_favorites', 'UserController@myFavorites')->name('my_favorites');

});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});




Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('/brand', 'BrandController', ['as' => 'admin']);
    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
    Route::resource('/item', 'ItemController', ['as' => 'admin']);
    Route::resource('/order', 'OrderController', ['as' => 'admin']);
    Route::resource('/user', 'UserController', ['as' => 'admin']);
    Route::resource('/email', 'ContactController', ['as' => 'admin']);
    Route::get('/review', 'ReviewController@index')->name('admin.review.index');
    Route::get('/review/toggle/{id}', 'ReviewController@toggle');
    Route::delete('/review/{id}/destroy', 'ReviewController@destroy')->name('review.destroy');
});

