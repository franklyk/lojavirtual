@props(['name', 'label', 'id', 'checked' => false, 'disabled' => false])

@php

    $defaults = [
        'type' => 'radio',

        'name' => $name,

        'id' => $id,

        'class' => 'form-check-input',
    ];

@endphp

<div class="form-check">

    <label class="form-check-label" for="{{ $id }}">

        <input {{ $attributes->merge($defaults) }} @checked($checked) @disabled($disabled)>

        {{ $label }}

    </label>

</div>
