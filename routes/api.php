<?php

use App\Models\Product;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route global
//Route::apiResource('Product', App\Http\Controllers\Api\V1\CreateProductController::class);

//Route by request
Route::get('/product', [App\Http\Controllers\Api\V1\CreateProductController::class, 'index']);
Route::post('/product',[App\Http\Controllers\Api\V1\CreateProductController::class,'store']);
Route::put('/product/{id}',[App\Http\Controllers\Api\V1\CreateProductController::class,'update']);
Route::delete('/product/{id}',[App\Http\Controllers\Api\V1\CreateProductController::class,'destroy']);
