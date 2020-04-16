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

Route::group(['prefix' => 'v1', 'middleware' => ['throttle:120,1']], function () {
    /**
     * Authentication & authorization route
     */
    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');

    Route::group(['middleware' => ['auth:api']], function () {
        Route::post('farmers/prepapre_land', 'FarmerController@prepareLand');
        Route::post('farmers/farm_nursery', 'FarmerController@farm_nursery');
        Route::post('farmers/farm_spraying_weeding', 'FarmerController@farm_spraying_weeding');
        Route::post('farmers/farm_fertilizer_application', 'FarmerController@farm_fertilizer_application');
        Route::post('farmers/farm_harvesting', 'FarmerController@farm_harvesting');
        Route::post('farmers/farm_produce_sale', 'FarmerController@farm_produce_sale');
        
        Route::apiResource('farmers', 'FarmerController');

    });

    /**
     * Handle non-existent routes
     */
    Route::fallback(function () {
        return response()->json(['message' => 'Not Found!'], 404);
    });

});
