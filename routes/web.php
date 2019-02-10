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

Route::get('/', 'PagesController@index')->name('main');
Route::get('/house', 'PagesController@house')->name('house');
Route::get('/business', 'PagesController@business')->name('business');
Route::get('/portfolio', 'PagesController@portfolio')->name('portfolio');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::get('/categories/{category}', 'PagesController@category')->name('category');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {

    Auth::routes();

    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::resources([

        'product_categories' => 'Admin\ProductCategoriesController',
        'product_series' => 'Admin\ProductSeriesController',

        'our_addresses' => 'Admin\OurAddressesController',
        'our_phones' => 'Admin\OurPhonesController',
        'our_emails' => 'Admin\OurEmailsController'
    ]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');