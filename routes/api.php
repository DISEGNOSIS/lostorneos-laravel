<?php

use Illuminate\Http\Request;

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
    $users = \App\User::with('country', 'roles')->where('username', 'LIKE', '%'. $request->input('query') .'%')->get();
    foreach ($users as $value) {
        $value->country->flag;
        $value->roles[0]->display_name;
    }
    return $users;
});