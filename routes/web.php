<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/', 'FrontProductListController@index');
Route::get('/product/{id}', 'FrontProductListController@show')->name('product.view');

Route::get('/category/{name}', 'FrontProductListController@allProduct')->name('product.list');
Route::get('/', 'FrontProductListController@index');
Route::get('/subcategory/{name}', 'FrontProductListController@allSubcategory')->name('subcategory.list');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    ['prefix' => 'auth', 'middleware' => ['auth', 'isAdmin']],
    function () {
        Route::resource('category', 'CategoryController');
        Route::post('category/{id}', 'CategoryController@update');
        Route::get('slider/create', 'SliderController@create');
        Route::resource('slider', 'Slidercontroller');
        Route::post('slider', 'SliderController@store')->name('slider.store');
        Route::post('slider/{id}', 'SliderController@destroy')->name('slider.destroy');
        Route::get('sliders', 'SliderController@index');

        Route::resource('subcategory', 'Subcategorycontroller');
        Route::post('subcategory/{id}', 'Subcategorycontroller@update');
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::resource('product', 'ProductController');

        Route::resource('user', 'UserController');
        //Route::get('users', 'UserController@index')->name('user.index');
        Route::post('user/{id}', 'UserController@destroy')->name('user.destroy');
        Route::get('/orders', 'CartController@userOrder');
        Route::get('/orders/{id}', 'CartController@viewUserOrder')->name('user.order');

    }
);

Route::get('subcategories/{id}', 'ProductController@loadSubcategories');

Route::get('/addToCart/{product}', 'CartController@addToCart')->name('add.cart');

Route::get('/cart', 'CartController@showCart')->name('cart.show');
Route::post('products/{product}', 'CartController@updateCart')->name('cart.update');
Route::post('product/{product}', 'CartController@removeCart')->name('cart.remove');
Route::get('/checkout/{amount}', 'CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::post('/charge', 'CartController@charge')->name('cart.charge');
Route::get('/order', 'CartController@order')->name('order')->middleware('auth');
Route::get('all/products', 'FrontProductListController@moreProducts')->name('more.product');

//Route::get('/orders/{userid}/{orderid}', 'CartController@viewUserOrder')->name('user.order');
Route::get('/orders/{userid}/{orderid}','CartController@viewUserOrder')->name('user.order');
Route::get('/orders', 'CartController@userOrder')->name('order.index');


