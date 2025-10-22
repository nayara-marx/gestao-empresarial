<div class="card" style="width: 18rem;">
    <img src="{{ Storage::url($imagem) }}" class="card-img-top" alt="{{ $nome }}">
    <div class="card-body">
        <h5 class="card-title">{{ $nome }}</h5>
        <p class="card-text">{{ $descricao ?? '' }}</p>
        <p><strong>R$ {{ number_format($preco ?? 0,2,',','.') }}</strong></p>
        <a href="{{ $link }}" class="btn btn-primary">Ver Produto</a>
    </div>
</div>
