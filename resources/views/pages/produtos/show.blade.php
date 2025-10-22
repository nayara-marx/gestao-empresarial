@extends('layouts.app')

@section('title', $produto->nome)

@section('content')
<div class="container">
    <div class="card mb-4 shadow-sm">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid rounded-start" alt="{{ $produto->nome }}">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h3 class="card-title">{{ $produto->nome }}</h3>
                    <p class="card-text">{{ $produto->descricao }}</p>
                    <p class="fw-bold text-success fs-4">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                    <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar à lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
