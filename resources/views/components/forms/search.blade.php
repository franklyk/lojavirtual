@props([

    'label' => null,

    'name',

])

@php

    $hasError = $errors->has($name);

    $defaults = [

        'type' => 'search',

        'id' => $name,

        'name' => $name,

        'value' => request($name),

        'class' => 'form-control' . ($hasError ? ' is-invalid' : ''),

    ];

@endphp

<div class="form-field form-search">

    @if ($label)

        <label
            for="{{ $name }}"
            class="form-label"
        >
            {{ $label }}
        </label>

    @endif

    <div class="form-search-group">

        <input {{ $attributes->merge($defaults) }}>
        <x-buttons.search />
        
    </div>

    @error($name)

        <div class="invalid-feedback">
            {{ $message }}
        </div>

    @enderror

</div>
