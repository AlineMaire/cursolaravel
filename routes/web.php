<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;


//cadastrar
Route::get('livros/create', [LivroController::class, 'create']);
Route::post('livros/', [LivroController::class, 'store']);

//listar
Route::get('livros/{livro}', [LivroController::class, 'show']);

//editar livro cadastrado
Route::get('livros/{livro}/edit', [LivroController::class, 'edit']);
Route::patch('livros/{livro}/', [LivroController::class, 'update']);

//index livro cadastrado
Route::get('livros', [LivroController::class, 'index']);

//deletar
Route::delete('livros/{livro}', [LivroController::class, 'destroy']);

//login
Route::get('loginlocal', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('loginlocal', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('/', [IndexController::class, 'index']);

//login com senha única
Route::get('/login/senhaunica', [LoginController::class, 'redirectToProvider']);
Route::get('/logincallback', [LoginController::class, 'handleProviderCallback']);

//novoadmin
Route::get('/novoadmin', [UserController::class, 'form']);
Route::post('/novoadmin', [UserController::class, 'register']);

//upload de arquivos
Route::resource('files', FileController::class);