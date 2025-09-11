@props(['tipo' => 'button', 'cor' => 'primary'])

<button type="{{ $tipo }}" {{ $attributes->merge(['class' => "btn btn-$cor"]) }}>
    {{ $slot }}
</button>
