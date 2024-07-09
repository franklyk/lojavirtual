@props(['legend'])

@php
    $classes = 'fieldset';

    $defaults = [
        'class' => $classes,
    ];
@endphp

<fieldset {{ $attributes($defaults) }}>
    <legend>
        <h1>{{ $legend }}</h1>
    </legend>

    {{ $slot }}

</fieldset>
