@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container py-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Login</h2>

    <form action="#" method="POST">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required placeholder="Digite seu e-mail">
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required placeholder="Digite sua senha">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>

        <div class="mt-3 text-center">
            <a href="#">Esqueceu a senha?</a>
        </div>
    </form>
</div>
@endsection
