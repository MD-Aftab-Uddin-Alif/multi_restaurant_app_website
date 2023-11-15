<?php

use App\Http\Controllers\API\BannerController;
use App\Http\Controllers\API\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RestaurantController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Group(['middleware' => 'api.verify.multi_restaurant'], function () {

    Route::controller(AuthController::class)->group(function () {
        Route::post('/sign-up', 'signUp');
        Route::post('/otp-verification', 'otpVerification');
        Route::post('/sign-in', 'signIn');
        // Route::post('/sign-in-with-google', 'signInWithGoogle');
        Route::post('/update-password', 'updatePassword');
        Route::post('/reset-password', 'resetPassword');
    });

    Route::Group(['prefix' => 'restaurant'], function () {
        Route::controller(RestaurantController::class)->group(function () {
            Route::get('list',  'getList');
        });
    });

    Route::Group(['prefix' => 'food'], function () {
        Route::controller(FoodController::class)->group(function () {
            Route::get('list',  'getList');
        });
    });

    Route::Group(['prefix' => 'banner'], function () {
        Route::controller(BannerController::class)->group(function () {
            Route::get('list',  'getList');
        });
    });

    
});