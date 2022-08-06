<?php

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

Route::get('customers', function() {});
Route::post('customers', function() {});
Route::get('customers/{customer_id}', function() {});
Route::put('customers/{customer_id}', function() {});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
