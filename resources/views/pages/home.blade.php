@extends('layouts.app')

@section('title', 'Minha Loja')

@section('content')
<div class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Descontos imperdíveis para você!</h1>
        <p class="lead mb-4">Aproveite nossas ofertas exclusivas com até <span class="fw-bold">50% OFF</span> em diversos produtos selecionados.</p>
        <a href="{{ route('produtos.index') }}" class="btn btn-light btn-lg">Confira Agora</a>
    </div>
</div>
@endsection
