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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('admin.dashboard');
});

Route::get('/index/test', function () {
    return view('test');
});

Route::resource('category', 'CategoryController');
Route::post('category/{id}', 'CategoryController@update');

Route::resource('subcategory', 'Subcategorycontroller');
Route::post('subcategory/{id}', 'Subcategorycontroller@update');

Route::resource('product', 'ProductController');
Route::get('subcategories/{id}', 'ProductController@loadSubcategories');
