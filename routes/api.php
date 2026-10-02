<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Cars
use App\Http\Controllers\Api\CarController;


Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);
Route::post('/cars', [CarController::class, 'store']);
Route::post('/cars/{id}', [CarController::class, 'update']);
Route::delete('/cars/{id}', [CarController::class, 'destroy']);
