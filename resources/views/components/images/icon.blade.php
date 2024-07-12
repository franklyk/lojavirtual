@props(['icon'])

@php
    $classes = 'icon ';

    $defaults = [
        'class' => $classes . $icon,
    ];

@endphp

<span>

    <i {{ $attributes($defaults) }}></i>

</span>
