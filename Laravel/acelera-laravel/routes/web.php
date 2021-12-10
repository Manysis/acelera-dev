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
Route::get('/doc', [DocController::class, 'index']);
Route::get('/doc/show/{id}', [DocController::class, 'show']);
Route::get('/assinaturas', [AssinaturaController::class, 'index']);
Route::get('/assinatura/show/{id}', [AssinaturaController::class, 'show']);

