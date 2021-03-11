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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/product-detail/1', function () {
    return view('pages.product-detail');
});

Route::get('/price-list', function () {
    return view('pages.pricelist');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
