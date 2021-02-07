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
    Route::get('/announcements','Admin\AnnouncementController@index')->name('announcements.index');
    Route::get('/announcements/create', 'Admin\AnnouncementController@create')->name('announcements.create');
    Route::post('/announcements', 'Admin\AnnouncementController@store')->name('announcements.store');
    Route::patch('/announcements/{announcement}', 'Admin\AnnouncementController@update')->name('announcements.update');
    Route::get('/announcements/{announcement}/edit', 'Admin\AnnouncementController@edit')->name('announcements.edit');
    Route::delete('/announcements/{announcement}', 'Admin\AnnouncementController@destroy')->name('announcements.destroy');
    Route::get('/contact/create','Admin\ContactUsController@create')->name('contact.create');
    Route::get('/contact/index','Admin\ContactUsController@index')->name('contact.index');
    Route::post('/contact/create','Admin\ContactUsController@store')->name('contact.store');
});
