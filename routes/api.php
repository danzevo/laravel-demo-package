<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CrudController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [CrudController::class, 'index']);
Route::post('/posts', [CrudController::class, 'store']);
Route::patch('/posts/{id}', [CrudController::class, 'update']);
Route::delete('/posts/{id}', [CrudController::class, 'destroy']);
