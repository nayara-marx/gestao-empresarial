@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<div class="container py-5">
    <h1>Cadastro</h1>

    <form action="{{ route('cadastro.enviar') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <!-- Outros campos -->

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
