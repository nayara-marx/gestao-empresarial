@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container">
    <h2 class="mb-4">Todos os Produtos</h2>
    <div class="row">
        @forelse($produtos as $produto)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" alt="{{ $produto->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="text-success fw-bold">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary w-100">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Nenhum produto cadastrado.</p>
        @endforelse
    </div>
</div>
@endsection
