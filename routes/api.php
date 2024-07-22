<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


    Route::middleware('auth:sanctum')->group(function () {

        // get user data
        Route::get('user', [UserController::class, 'getUser']);
        // logout user
        Route::post('logout', [UserController::class, 'logout']);
    });


        /*----------------- Posts -----------------*/
     Route::apiResource('posts', PostController::class);
        /*----------------- end posts -------------*/


        /*----------------- Auth -----------------*/
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
        /* ----------------- end Auth ----------- */



