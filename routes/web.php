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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/faq', 'PagesController@faq')->name('faq');


Route::get('/my-account', 'UsersController@show')->name('my-account')->middleware('role:owner|admin|editor|user');

Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/discord', 'Auth\LoginController@redirectToDiscord')->name('discord');
Route::get('login/discord/callback', 'Auth\LoginController@handleDiscordCallback');

Route::get('login/github', 'Auth\LoginController@redirectToGitHub')->name('github');
Route::get('login/github/callback', 'Auth\LoginController@handleGitHubCallback');
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::prefix('admin')->middleware('role:owner|admin|editor')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/users', 'AdminUsersController@index')->name('admin.users');
    Route::post('/users', 'AdminUsersController@store')->name('admin.users.store');
    Route::get('/users/create', 'AdminUsersController@create')->name('admin.users.create');
    Route::get('/users/{user}', 'AdminUsersController@show')->name('admin.users.show');
    Route::get('/users/{user}/edit', 'AdminUsersController@edit')->name('admin.users.edit');
    Route::put('/users/{user}', 'AdminUsersController@update')->name('admin.users.update');
    Route::delete('/users/{user}', 'AdminUsersController@destroy')->name('admin.users.destroy');

    Route::get('/roles', 'AdminController@index')->name('admin.roles');

});

//Route::get('/home', 'HomeController@index')->name('home');
