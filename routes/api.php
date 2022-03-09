<?php

use App\Http\Controllers\PropertyController;
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

Route::get('/property/all', [PropertyController::class, 'all']);
Route::get('/property/detail/{id}', [PropertyController::class, 'detail']);
Route::post('/property/add', [PropertyController::class, 'add']);
Route::delete('/property/delete/{id}', [PropertyController::class, 'delete']);
