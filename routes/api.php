<?php

use Illuminate\Http\Request;
use App\User;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users/search', function (Request $request) {
    $users = User::with('country', 'roles')->where('username', 'LIKE', '%'. $request->input('query') .'%')->get();
    foreach ($users as $value) {
        $value->country->flag;
        $value->roles[0]->display_name;
    }
    return $users;
});

Route::get('posts/search', function (Request $request) {
    $posts = Post::with('category', 'user')->where('title', 'LIKE', '%'. $request->input('query') .'%')->get();
    foreach ($posts as $value) {
        $value->category->id;
        $value->category->name;
        $value->user->username;
    }
    return $posts;
});
