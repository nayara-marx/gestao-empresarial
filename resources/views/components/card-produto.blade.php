@props(['imagem', 'nome', 'descricao', 'link'])

<div class="card h-100">
    @if($imagem)
    <img src="{{ asset('storage/' . $imagem) }}" class="card-img-top" alt="{{ $nome }}">
    @else
    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Sem imagem">
    @endif

    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $nome }}</h5>
        <p class="card-text">{{ Str::limit($descricao, 100) }}</p>
        <a href="{{ $link }}" class="btn btn-primary mt-auto">Ver detalhes</a>
    </div>
</div>
