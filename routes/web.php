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
    return view('index');
})->name('home');

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/my-account', function () {
    return view('my-account');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
