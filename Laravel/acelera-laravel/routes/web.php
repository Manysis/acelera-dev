<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DocController, UserController, AssinaturaController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {
    return view('welcome');
});


Route::get('/perfil', [UserController::class, 'index']);
/* Documentos */
Route::get('/documentos', [DocController::class, 'index']);
Route::get('/documento/show/{id}', [DocController::class, 'show']);
Route::get('/documento/novo', [DocController::class, 'new']);
Route::get('/documento/criar', [DocController::class, 'create']);
/* Assinaturas */
Route::get('/assinaturas', [AssinaturaController::class, 'index']);
Route::get('/assinatura/show/{id}', [AssinaturaController::class, 'show']);

