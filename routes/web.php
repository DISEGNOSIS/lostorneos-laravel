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


Route::get('/my-account', 'UsersController@show')->name('my-account')->middleware('auth');

Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/discord', 'Auth\LoginController@redirectToDiscord')->name('discord');
Route::get('login/discord/callback', 'Auth\LoginController@handleDiscordCallback');

Route::get('login/github', 'Auth\LoginController@redirectToGitHub')->name('github');
Route::get('login/github/callback', 'Auth\LoginController@handleGitHubCallback');

Route::prefix('admin')->middleware('role:owner|admin|editor')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin');
    
    Route::get('/users', 'AdminUsersController@index')->name('admin.users');
    Route::post('/users', 'AdminUsersController@store')->name('admin.users.store');
    Route::get('/users/search', 'AdminUsersController@search')->name('admin.users.search');
    Route::get('/users/create', 'AdminUsersController@create')->name('admin.users.create');
    Route::get('/users/{user}', 'AdminUsersController@show')->name('admin.users.show');
    Route::get('/users/{user}/edit', 'AdminUsersController@edit')->name('admin.users.edit');
    Route::get('/users/{user}/active', 'AdminUsersController@active')->name('admin.users.active');
    Route::put('/users/{user}', 'AdminUsersController@update')->name('admin.users.update');
    Route::delete('/users/{user}', 'AdminUsersController@destroy')->name('admin.users.destroy');

    Route::get('/roles', 'AdminRolesController@index')->name('admin.roles');
    Route::post('/roles', 'AdminRolesController@store')->name('admin.roles.store');
    Route::get('/roles/create', 'AdminRolesController@create')->name('admin.roles.create');
    Route::get('/roles/{role}', 'AdminRolesController@show')->name('admin.roles.show');
    Route::get('/roles/{role}/edit', 'AdminRolesController@edit')->name('admin.roles.edit');
    Route::put('/roles/{role}', 'AdminRolesController@update')->name('admin.roles.update');
    Route::delete('/roles/{role}', 'AdminRolesController@destroy')->name('admin.roles.destroy');

    Route::get('/permissions', 'AdminPermissionsController@index')->name('admin.permissions');
    Route::post('/permissions', 'AdminPermissionsController@store')->name('admin.permissions.store');
    Route::get('/permissions/create', 'AdminPermissionsController@create')->name('admin.permissions.create');
    Route::get('/permissions/{permission}', 'AdminPermissionsController@show')->name('admin.permissions.show');
    Route::get('/permissions/{permission}/edit', 'AdminPermissionsController@edit')->name('admin.permissions.edit');
    Route::put('/permissions/{permission}', 'AdminPermissionsController@update')->name('admin.permissions.update');
    Route::delete('/permissions/{permission}', 'AdminPermissionsController@destroy')->name('admin.permissions.destroy');

});
