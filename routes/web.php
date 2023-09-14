<?php

use App\Http\Controllers\UasController;
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


Route::get('/21312073', [UasController::class, 'index']);
Route::get('/21312073/create', [UasController::class, 'create']);
Route::post('/21312073', [UasController::class, 'store']);
Route::get('/21312073/{21312073_id}/edit', [UasController::class, 'edit']);
Route::put('/21312073/{21312073_id}', [UasController::class, 'update']);
Route::delete('/21312073/{21312073_id}', [UasController::class, 'destroy']);