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

Route::prefix('admin')->group(function(){
    Route::get('restaurant','Admin\\RestaurantController@index')->name('restaurant.index');
    Route::get('restaurant/new','Admin\\RestaurantController@create')->name('restaurant.new');
    Route::post('restaurant/save','Admin\\RestaurantController@store')->name('restaurant.store');
    Route::get('restaurant/edit/{restaurant}','Admin\\RestaurantController@edit')->name('restaurant.edit');
    Route::get('restaurant/delete/{id}','Admin\\RestaurantController@destroy')->name('restaurant.destroy');
    Route::get('restaurant/update/{id}','Admin\\RestaurantController@update')->name('restaurant.update');

});
