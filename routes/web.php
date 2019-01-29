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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// API Routes
Route::get('/api/items', 'ApiController@get')->name('getIitems');

// Static Web Routes
Route::get('/index', 'PagesController@index')->name('index');
Route::get('/shop', 'PagesController@shop')->name('shop');
Route::get('/shop/{id}', 'PagesController@show')->name('shop');