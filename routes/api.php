<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\app\PrincipalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

============ POSTMAN =============
https://dbd82a19-6f4a-41a7-a7d0-a45bd282876c-00-2rvlvqw9gsqa5.kirk.replit.dev/api/
method: post
body:
    texto:teste A realizado E com sucesso
    fator:1
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', [PrincipalController::class, 'responder']);