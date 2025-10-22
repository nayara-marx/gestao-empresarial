<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    // Página inicial
    public function index()
    {
        $produtos = Produto::take(3)->get(); // pega 3 produtos em destaque
        return view('pages.home', compact('produtos'));
    }

    public function sobre()
    {
        return view('pages.sobre');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function cadastro()
    {
        return view('pages.cadastro');
    }
}