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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('user')->group( function(){
    Route::get('/home','User\FrontController@getHome')->name('user.home');
    Route::get('/product','User\FrontController@getProduct')->name('user.product');
    Route::get('/product-details','User\FrontController@getProductDetails')->name('user.product.details');
});


Route::prefix('admin')->group( function(){
    Route::get('/dashboard','Admin\DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/client','Admin\ClientController@index')->name('client.index');
    Route::get('/client/create', 'Admin\ClientController@create')->name('client.create');
    Route::post('/client', 'Admin\ClientController@store')->name('client.store');
    Route::patch('/client/{client}', 'Admin\ClientController@update')->name('client.update');
    Route::get('/client/{client}/edit', 'Admin\ClientController@edit')->name('client.edit');
    Route::delete('/client/{client}', 'Admin\ClientController@destroy')->name('client.destroy');
});
