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
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->namespace('Admin')->group(function(){
        Route::get('restaurants','RestaurantController@index')->name('restaurants.index');
        Route::get('restaurant/new','RestaurantController@create')->name('restaurant.new');
        Route::post('restaurant/save','RestaurantController@store')->name('restaurant.store');
        Route::get('restaurant/{restaurant}/edit','RestaurantController@edit')->name('restaurant.edit');
        Route::get('restaurant/delete/{id}','RestaurantController@destroy')->name('restaurant.destroy');
        Route::get('restaurant/update/{id}','RestaurantController@update')->name('restaurant.update');

        Route::get('users','UserController@index')->name('users.index');
        Route::get('user/new','UserController@create')->name('user.new');
        Route::post('user/save','UserController@store')->name('user.store');
        Route::get('user/{user}/edit','UserController@edit')->name('user.edit');
        Route::get('user/delete/{id}','UserController@destroy')->name('user.destroy');
        Route::get('user/update/{id}','UserController@update')->name('user.update');

    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
