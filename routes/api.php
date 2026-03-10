<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('register' , [AuthController::class , 'register']);
Route::post('login' , [AuthController::class , 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout' , [AuthController::class , 'logout']);
    Route::get('user' , [UserController::class , 'user']);

    Route::post('plats' ,[PlatController::class , 'store']);
    Route::get('plats' ,[PlatController::class , 'index']);
    Route::get('plats/{id}' ,[PlatController::class , 'show']);
    Route::put('plats/{id}' ,[PlatController::class , 'update']);
    Route::delete('plats/{id}' ,[PlatController::class , 'destroy']);


    Route::post('categories' ,[PlatController::class , 'store']);
    Route::get('categories' ,[PlatController::class , 'index']);
    Route::get('categories/{id}' ,[PlatController::class , 'show']);
    Route::put('categories/{id}' ,[PlatController::class , 'update']);
    Route::delete('categories/{id}' ,[PlatController::class , 'destroy']);
    Route::delete('categories/{id}/plats' ,[PlatController::class , 'add']);
});





