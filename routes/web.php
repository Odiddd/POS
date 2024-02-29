<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
 
Route::prefix('category')->group(function(){
    Route::get('/foodBeverage', [FoodBeverageController::class, 'index']);
    Route::get('/beautyHealth', [BeautyHealthController::class, 'index']);
    Route::get('/homeCare', [HomeCareController::class, 'index']);
    Route::get('/babyKid', [BabyKidController::class, 'index']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
