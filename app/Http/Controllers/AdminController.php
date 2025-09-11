<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function login()
    {
        return view('pages.admin.login'); 
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard'); 
    }

    public function clientesIndex()
    {
        
        $clientes = [
            ['id' => 1, 'nome' => 'Cliente A'],
            ['id' => 2, 'nome' => 'Cliente B'],
        ];

        return view('pages.admin.clientes.index', compact('clientes'));
    }

    public function clientesShow($id)
    {
        $cliente = ['id' => $id, 'nome' => "Cliente $id", 'email' => "cliente$id@exemplo.com"];

        return view('pages.admin.clientes.show', compact('cliente'));
    }
}
