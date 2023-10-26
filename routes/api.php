<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/students',[StudentController::class,'index']);
// Route::get('/students/{id}',[StudentController::class,'show']);
Route::post('/register',[UserController::class,'register']);

Route::middleware('auth:sanctum')->get('/students/{id}',[StudentController::class,'show']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
