<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('Users', UserController::class);
Route::get('/',[AuthController::class,'index']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/forgotpassword',[AuthController::class,'forGotPassword']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post("/logout", [AuthController::class, 'logout']);
});
//Route::get('/', [MenuController::class, 'index'])->name('index');



// Route::get('/', function () {
//     return view('test');
// });