<?php

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\SalleController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {
          
    Route::post('/AddSalle', [SalleController::class,'store']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::get('/AllCategories', [CategoryController::class, 'index']);
    Route::get('/salle/{id}', [SalleController::class,'show']);
    
});

Route::get('salles', [SalleController::class, 'index']);
