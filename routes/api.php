<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Routes
use \App\Http\Controllers\Api\StoreController;
use \App\Http\Controllers\Api\ProductController;
use App\Models\Product;

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

Route::apiResource('stores', StoreController::class);
Route::apiResource('stores.products', ProductController::class);

// Route::middleware('auth:api')->group(function(){
//     // Rotas do recurso "Stores"
//     Route::resource('stores',StoreController::class);
// });