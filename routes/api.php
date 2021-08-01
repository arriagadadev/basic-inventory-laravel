<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', 'API\AuthController@login')->middleware(['cors']);

Route::group([
    'as' => 'api.', 
    'namespace' => 'API', 
    'middleware' => ['auth:api', 'cors']
    ], function () {
        //Categories
        Route::get('/categories', 'CategoryController@getCategories');
        //Items
        Route::get('/items', 'ItemController@getItems');
        Route::get('/item/{item}', 'ItemController@get');
        Route::post('/item', 'ItemController@store');
        Route::put('/item', 'ItemController@update');
        Route::delete('/item/{item}', 'ItemController@delete');
    });
