<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentarioController;
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

Route::post('CriarPostagem', [PostController::class,'store']);
Route::post('Postagem/Editar/{id}', [PostController::class,'edit']);
Route::get('Postagem/{id}', [PostController::class,'show']);
Route::get('Postagem', [PostController::class,'index']);
Route::delete('Postagem/Deletar/{id}', [PostController::class,'destroy']);


Route::post('Postagem/{id}/Comentario', [CommentarioController::class,'store']);
Route::post('Comentario/Editar/{id}', [CommentarioController::class,'edit']);
Route::get('Comentario/{id}', [CommentarioController::class,'show']);
Route::get('Comentario', [CommentarioController::class,'index']);
Route::delete('Comentario/Deletar/{id}', [CommentarioController::class,'destroy']);