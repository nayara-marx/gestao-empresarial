@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
<h1>Adicionar Produto</h1>
<form action="{{ route('admin.produtos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <x-input label="Nome" name="nome" />
    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
    </div>
    <x-input label="Preço" name="preco" type="number" step="0.01" />
    <div class="mb-3">
        <label class="form-label">Imagem</label>
        <input type="file" class="form-control" name="imagem">
    </div>
    <x-botao tipo="submit" cor="success">Cadastrar</x-botao>
</form>
@endsection
