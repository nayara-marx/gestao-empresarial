@extends('layouts.app')

@section('title', $produto->nome)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" class="img-fluid" style="max-height: 400px; object-fit: contain;">
        </div>
        <div class="col-md-6">
            <h1>{{ $produto->nome }}</h1>
            <p class="lead text-muted">{{ $produto->descricao }}</p>
            <h3 class="text-primary">{{ $produto->valor }}</h3>
            <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary mt-3">← Voltar para lista</a>
        </div>
    </div>
</div>
@endsection
