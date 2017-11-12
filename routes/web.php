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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
 *
 * FRONT-END-ROUTE
 */
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/help', function () {
    return view('pages.help');
});
Route::get('/privacy', function () {
    return view('pages.privacy');
});
Route::get('/values', function () {
    return view('pages.values');
});