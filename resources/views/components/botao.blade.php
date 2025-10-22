<button type="{{ $tipo ?? 'button' }}" class="btn btn-{{ $cor ?? 'primary' }}">
    {{ $slot }}
</button>
