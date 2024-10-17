<?php

use App\Http\Controllers\CabinController;
use App\Models\Cabin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('v1/cabins', CabinController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/hola/locos', [App\Http\Controllers\CabinController::class, 'index']);

Route::apiResource('cabin', App\Http\Controllers\CabinController::class);