<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/students',[StudentController::class,'index']);
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/students/{id}',[StudentController::class,'show']);
    Route::post('/students',[StudentController::class,'create']);
    Route::post('/logout',[UserController::class,'logout']);
});


// Route::middleware('auth:sanctum')->get('/students/{id}',[StudentController::class,'show']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
