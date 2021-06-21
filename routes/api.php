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

Route::resource('products', ProductController::class);

// Route::prefix('posts')->name('products.')->group( function(){
//     Route::get('/products', [ProductController::Class, 'index']);
//     Route::post('/products', [ProductController::Class, 'store']);
//     Route::get('/products/{id}', [ProductController::Class, 'show']);
//     Route::put('/products/{id}', [ProductController::Class, 'update']);
//     Route::delete('/products/{id}', [ProductController::Class, 'destroy']);
// });


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
