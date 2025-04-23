@php
    $class ??= null;
    $name ??= '';
@endphp

<div @class(["form-check form switch", $class])>

    <input type="hidden" value="0" name="{{ $name }}">
    <input type="checkbox" role="switch" name="{{ $name }}" value="1"
           class="form-check-input @error($name) is-invalid @enderror"
           id="{{ $name }}" @checked(old($name, $value ?? false))>
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
