<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;

use App\Http\Controllers\AuthController;

/*  Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});  */

Route::group([                        
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
  
});

Route::group([
    'middleware' => 'api',
], function ($router) {
  /*   Route::get('bus',[BusController::class, 'index']); 
    Route::post('bus/create',[BusController::class, 'store']); 
    Route::get('bus/{id}',[BusController::class, 'show']); 
    Route::get('bus/delete/{id}',[BusController::class, 'destroy']); 
    Route::post('bus/update/{id}',[BusController::class, 'update']); */ 
    Route::apiResource('bus',busController::class); 
    Route::apiResource('users',UserController::class); 
    Route::apiResource('companies',CompanyController::class); 
    Route::apiResource('services',ServiceController::class); 
});
    

