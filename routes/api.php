<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use App\Http\Resources\User as UserResource;
// use App\Http\Resources\GamesCollection;
use App\Post;
use App\User;
use App\Subdiddit;
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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::get('/', 'PostController@index');

Route::get('/{id}', 'PostController@show');

Route::get('/U/{user_id}', 'UserController@show');

Route::get('/D/{subdiddit_id}', 'SubdidditController@show');

