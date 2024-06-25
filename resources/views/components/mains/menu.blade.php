@props(['image', 'width'])

@php

    $classes = 'flex gap-6 items-center p-2';

    $defaults = [
        'class' => $classes,
    ];

@endphp

<div {{ $attributes($defaults) }}>
    
    <x-images.avatar />
    <x-images.icon icon="bi bi-list cursor-pointer overflow-x-hidden " id="btn-menu" />

</div>
