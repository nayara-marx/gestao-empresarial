<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

// Página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Cadastro de usuário
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [HomeController::class, 'store'])->name('cadastro.store');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [HomeController::class, 'store'])->name('cadastro.enviar');  // <-- Rota que está faltando


// Login de usuário
Route::get('/login', [HomeController::class, 'login'])->name('login');

// Página "Sobre nós"
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');

// Listagem de produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

// Detalhes de um produto específico
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('produtos.show');

// Rotas administrativas
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/clientes', [AdminController::class, 'clientesIndex'])->name('admin.clientes.index');
    Route::get('/clientes/{id}', [AdminController::class, 'clientesShow'])->name('admin.clientes.show');
});
