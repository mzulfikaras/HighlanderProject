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


Route::get('/','User\FrontController@getHome')->name('user.home');
Route::prefix('user')->group( function(){
    Route::get('/product','User\FrontController@getProduct')->name('user.product');
    Route::get('/product/cari','User\FrontController@filterProduct')->name('user.product.cari');
    Route::get('/product-details/{produk}','User\FrontController@getProductDetails')->name('user.product.details');
    Route::get('/about', 'User\FrontController@getAbout')->name('user.about');
    Route::get('/client','User\FrontController@getClient')->name('user.client');
    Route::get('/contact', 'User\FrontController@getContact')->name('user.contact');
    Route::post('/store-contact','User\FrontController@storeContact')->name('user.store.contact');
});

    // Authentication Routes...
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/admin/login', 'Auth\LoginController@login')->name('store.login');
    Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/admin/register', 'Auth\RegisterController@register')->name('store.register');


Route::prefix('admin')->middleware('auth')->group( function(){
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
    Route::delete('/contact-delete/{contacts}','Admin\ContactUsController@destroy')->name('contact.delete');
    Route::get('/merk', 'Admin\MerkController@index')->name('admin.merk.index');
    Route::get('/merk-create', 'Admin\MerkController@create')->name('admin.merk.create');
    Route::post('/merk-store', 'Admin\MerkController@store')->name('admin.merk.store');
    Route::get('/merk-edit/{merk}/edit', 'Admin\MerkController@edit')->name('admin.merk.edit');
    Route::put('/merk-update/{merk}', 'Admin\MerkController@update')->name('admin.merk.update');
    Route::delete('/merk-delete/{merk}', 'Admin\MerkController@destroy')->name('admin.merk.delete');
    Route::get('/client','Admin\ClientController@index')->name('client.index');
    Route::get('/client/create', 'Admin\ClientController@create')->name('client.create');
    Route::post('/client', 'Admin\ClientController@store')->name('client.store');
    Route::patch('/client/{client}', 'Admin\ClientController@update')->name('client.update');
    Route::get('/client/{client}/edit', 'Admin\ClientController@edit')->name('client.edit');
    Route::delete('/client/{client}', 'Admin\ClientController@destroy')->name('client.destroy');
});


