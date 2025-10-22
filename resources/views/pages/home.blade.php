@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <div class="jumbotron text-center py-5">
        <h1 class="display-5">Bem-vindo ao Sistema de Gestão Empresarial</h1>
        <p class="lead">Gerencie clientes, produtos e muito mais com facilidade.</p>
        <a href="{{ route('produtos.index') }}" class="btn btn-primary btn-lg mt-3">Ver Produtos</a>
    </div>
</div>
@endsection
