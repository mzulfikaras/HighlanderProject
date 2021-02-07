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
    Route::get('/about', 'User\FrontController@getAbout')->name('user.about');
    Route::get('/contact', 'User\FrontController@getContact')->name('user.contact');
});


Route::prefix('admin')->group( function(){
    Route::get('/dashboard','Admin\DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/announcements','Admin\AnnouncementController@index')->name('announcements.index');
    Route::get('/announcements/create', 'Admin\AnnouncementController@create')->name('announcements.create');
    Route::post('/announcements', 'Admin\AnnouncementController@store')->name('announcements.store');
    Route::patch('/announcements/{announcement}', 'Admin\AnnouncementController@update')->name('announcements.update');
    Route::get('/announcements/{announcement}/edit', 'Admin\AnnouncementController@edit')->name('announcements.edit');
    Route::delete('/announcements/{announcement}', 'Admin\AnnouncementController@destroy')->name('announcements.destroy');
    Route::get('/produks' , 'Admin\ProdukController@index')->name('produks.index');
    Route::get('/produks/create' , 'Admin\ProdukController@create')->name('produks.create');
    Route::post('/produks' , 'Admin\ProdukController@store')->name('produks.store');
    Route::get('/produks/{produk}','Admin\ProdukController@show')->name('produks.show');
    Route::get('/produks/{produk}/edit' , 'Admin\ProdukController@edit')->name('produks.edit');
    Route::patch('/produks/{produk}' , 'Admin\ProdukController@update')->name('produks.update');
    Route::delete('/produks/{produk}' , 'Admin\ProdukController@destroy')->name('produks.destroy');
    Route::get('/contact/create','Admin\ContactUsController@create')->name('contact.create');
    Route::get('/contact/index','Admin\ContactUsController@index')->name('contact.index');
    Route::post('/contact/create','Admin\ContactUsController@store')->name('contact.store');
    Route::get('/merk', 'Admin\MerkController@index')->name('admin.merk.index');
    Route::get('/merk-create', 'Admin\MerkController@create')->name('admin.merk.create');
    Route::post('/merk-store', 'Admin\MerkController@store')->name('admin.merk.store');
    Route::get('/merk-edit/{merk}/edit', 'Admin\MerkController@edit')->name('admin.merk.edit');
    Route::put('/merk-update/{merk}', 'Admin\MerkController@update')->name('admin.merk.update');
    Route::delete('/merk-delete/{merk}', 'Admin\MerkController@destroy')->name('admin.merk.delete');
});
