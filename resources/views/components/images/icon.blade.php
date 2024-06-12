@props(['icon'])

@php
    $defaults = [
        'class' => 'text-5xl ' . $icon,
    ];

@endphp

<span>

    <i {{ $attributes($defaults) }}></i>

</span>
