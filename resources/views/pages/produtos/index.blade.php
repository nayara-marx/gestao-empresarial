@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Lista de Produtos</h1>
    <div class="row">
        @foreach ($produtos as $produto)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $produto->nome }}</h5>
                    <p class="card-text text-truncate">{{ $produto->descricao }}</p>
                    <p class="card-text font-weight-bold">{{ $produto->valor }}</p>
                    <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary mt-auto">Ver detalhes</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
