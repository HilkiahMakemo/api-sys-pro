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

Route::middleware('auth:api')->get('/site', function (Request $request) {
    // return $request->user();
    Route::get('/', 'SiteController@index');
    Route::resource('page', PageController::class);
    Route::resource('tree', TreeController::class);
});
Route::prefix('site')->group(function() {
    Route::get('/', 'SiteController@index');
    Route::resource('page', PageController::class);
    Route::resource('tree', TreeController::class);
});
