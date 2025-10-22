<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login() {
        return view('pages.admin.login');
    }

    public function dashboard() {
        return view('pages.admin.dashboard');
    }

    public function clientes() {
        $clientes = Cliente::all();
        return view('pages.admin.clientes.index', compact('clientes'));
    }

    public function produtosIndex() {
        $produtos = Produto::all();
        return view('pages.admin.produtos.index', compact('produtos'));
    }

    public function produtosCreate() {
        return view('pages.admin.produtos.create');
    }

    public function produtosStore(Request $request) {
        $request->validate([
            'nome'=>'required',
            'descricao'=>'required',
            'preco'=>'required|numeric',
            'imagem'=>'required|image|max:2048'
        ]);

        $path = $request->file('imagem')->store('public/products');

        Produto::create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'preco'=>$request->preco,
            'imagem'=>$path
        ]);

        return redirect()->route('admin.produtos.index')->with('success','Produto cadastrado!');
    }
}
