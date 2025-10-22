@extends('layouts.app')

@section('title', 'Cadastro de Cliente')

@section('content')
<div class="container">
    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Cadastro de Cliente</h4>
        </div>
        <div class="card-body">

            {{-- Mensagem de sucesso --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Mensagens de erro --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Formulário --}}
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control" maxlength="9" required onblur="buscarCEP()">
                    </div>

                    <div class="col-md-8 mb-3">
                        <label class="form-label">Logradouro</label>
                        <input type="text" id="logradouro" name="logradouro" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Bairro</label>
                        <input type="text" id="bairro" name="bairro" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="form-control" required>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label class="form-label">UF</label>
                        <input type="text" id="uf" name="uf" class="form-control" maxlength="2" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3 w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

{{-- Script para integração com ViaCEP --}}
<script>
function buscarCEP() {
    const cep = document.getElementById('cep').value.replace(/\D/g, '');
    if (cep.length !== 8) return;

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
            if (!data.erro) {
                document.getElementById('logradouro').value = data.logradouro;
                document.getElementById('bairro').value = data.bairro;
                document.getElementById('cidade').value = data.localidade;
                document.getElementById('uf').value = data.uf;
            } else {
                alert('CEP não encontrado!');
            }
        })
        .catch(() => alert('Erro ao buscar o CEP. Tente novamente.'));
}
</script>
@endsection
