<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $tipo ?? 'text' }}" class="form-control" id="{{ $id }}" name="{{ $name }}" value="{{ $value ?? '' }}">
</div>
