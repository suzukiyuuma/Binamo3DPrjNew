<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\BainamoUsersController;
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

Route::get('/hello', [HelloController::class, 'index']);
Route::post('/registBainamoUser', [BainamoUsersController::class, 'create']);
Route::get('/getBainamoUser', [BainamoUsersController::class, 'get']);