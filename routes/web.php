<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;

// Área Pública
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/sobre',[HomeController::class,'sobre'])->name('sobre');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/cadastro',[HomeController::class,'cadastro'])->name('cadastro');
Route::post('/cadastro',[ClienteController::class,'store'])->name('clientes.store');
Route::get('/produtos',[ProdutoController::class,'index'])->name('produtos.index');
Route::get('/produtos/{id}',[ProdutoController::class,'show'])->name('produtos.show');

// Área Administrativa
Route::prefix('admin')->group(function() {
    Route::get('/login',[AdminController::class,'login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/clientes',[AdminController::class,'clientes'])->name('admin.clientes.index');
    Route::get('/produtos',[AdminController::class,'produtosIndex'])->name('admin.produtos.index');
    Route::get('/produtos/create',[AdminController::class,'produtosCreate'])->name('admin.produtos.create');
    Route::post('/produtos',[AdminController::class,'produtosStore'])->name('admin.produtos.store');
});
