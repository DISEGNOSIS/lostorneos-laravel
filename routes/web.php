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

Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/search', 'PostsController@search')->name('posts.search');
Route::get('/posts/{slug}', 'PostsController@show')->name('posts.show');
Route::get('/posts/tags/{slug}', 'TagsController@posts')->name('posts.tags.show');

Route::get('/categories/{slug}', 'CategoriesController@show')->name('categories.show');

Route::get('/games/{slug}', 'GamesController@show')->name('games.show');

Route::get('/tournaments', 'TournamentsController@index')->name('tournaments');
Route::get('/tournaments/{slug}', 'TournamentsController@show')->name('tournaments.show');
Route::get('/tournaments/tags/{slug}', 'TagsController@tournaments')->name('tournaments.tags.show');
Route::get('/tournaments/games/{slug}', 'GamesController@tournaments')->name('tournaments.games.show');
Route::get('/tournaments/teams/{slug}', 'TeamsController@tournaments')->name('tournaments.teams.show');

Route::get('/teams', 'TeamsController@index')->name('teams');
Route::get('/teams/{slug}', 'TeamsController@show')->name('teams.show');

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

    Route::get('/posts', 'AdminPostsController@index')->name('admin.posts');
    Route::post('/posts', 'AdminPostsController@store')->name('admin.posts.store');
    Route::get('/posts/search', 'AdminPostsController@search')->name('admin.posts.search');
    Route::get('/posts/create', 'AdminPostsController@create')->name('admin.posts.create');
    Route::post('/posts/save', 'AdminPostsController@save')->name('admin.posts.save');
    Route::get('/posts/{post}', 'AdminPostsController@show')->name('admin.posts.show');
    Route::get('/posts/{post}/edit', 'AdminPostsController@edit')->name('admin.posts.edit');
    Route::get('/posts/{post}/active', 'AdminPostsController@active')->name('admin.posts.active');
    Route::put('/posts/{post}', 'AdminPostsController@update')->name('admin.posts.update');
    Route::delete('/posts/{post}', 'AdminPostsController@destroy')->name('admin.posts.destroy');

    Route::get('/tags', 'AdminTagsController@index')->name('admin.tags');
    Route::post('/tags', 'AdminTagsController@store')->name('admin.tags.store');
    Route::get('/tags/create', 'AdminTagsController@create')->name('admin.tags.create');
    Route::get('/tags/{post}', 'AdminTagsController@show')->name('admin.tags.show');
    Route::get('/tags/{post}/edit', 'AdminTagsController@edit')->name('admin.tags.edit');
    Route::put('/tags/{post}', 'AdminTagsController@update')->name('admin.tags.update');
    Route::delete('/tags/{post}', 'AdminTagsController@destroy')->name('admin.tags.destroy');

    Route::get('/categories', 'AdminCategoriesController@index')->name('admin.categories');
    Route::post('/categories', 'AdminCategoriesController@store')->name('admin.categories.store');
    Route::get('/categories/create', 'AdminCategoriesController@create')->name('admin.categories.create');
    Route::get('/categories/{post}', 'AdminCategoriesController@show')->name('admin.categories.show');
    Route::get('/categories/{post}/edit', 'AdminCategoriesController@edit')->name('admin.categories.edit');
    Route::put('/categories/{post}', 'AdminCategoriesController@update')->name('admin.categories.update');
    Route::delete('/categories/{post}', 'AdminCategoriesController@destroy')->name('admin.categories.destroy');

});
