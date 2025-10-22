<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'sobrenome' => 'required|string|max:100',
            'cpf' => 'required|string|unique:clientes,cpf',
            'email' => 'required|email|unique:clientes,email',
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'uf' => 'required|string|size:2',
        ]);

        Cliente::create($request->all());

        return redirect()->route('home')->with('success', 'Cliente cadastrado com sucesso!');
    }
}
