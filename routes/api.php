<?php

use App\Http\Controllers\ProductController;
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


// Easier way of creating addresses

Route::resource('products', ProductController::class);


// Another method with Separated routes

// Route::prefix('products')->group( function(){
//     Route::get('', [ProductController::Class, 'index']);
//     Route::post('', [ProductController::Class, 'store']);
//     Route::get('{id}', [ProductController::Class, 'show']);
//     Route::put('{id}', [ProductController::Class, 'update']);
//     Route::delete('{id}', [ProductController::Class, 'destroy']);
// });


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
