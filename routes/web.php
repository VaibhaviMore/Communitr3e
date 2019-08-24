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
    return view('home');
    //return view('layouts.mainlayout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('programs', 'ProgramController');
Route::resource('accommodation', 'AccommodationController');

Route::get('/about', function () {
    return view('about');
});

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@sendContact');

Route::get('profile','UserController@profile');
Route::post('profile','UserController@update');