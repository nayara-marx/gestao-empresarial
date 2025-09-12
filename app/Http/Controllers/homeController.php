<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home'); 
    }

    public function cadastro()
    {
        return view('pages.cadastro'); 
    }

    public function login()
    {
        return view('pages.login');
    }

    public function sobre()
    {
        return view('pages.sobre'); 
    }
    public function registrar(Request $request)
{
   
    return back()->with('success', 'Cadastro realizado com sucesso!');
}
public function store(Request $request)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email',
        'senha' => 'required|min:6',
    ]);

    return redirect()->route('cadastro')->with('success', 'Cadastro realizado com sucesso!');
}


}
