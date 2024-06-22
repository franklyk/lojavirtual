@props(['label'])

@php
    
    $classes = 'inline-block text-lg font-medium leading-6 px-4';

    $defaults = [
        'class' => $classes,
    ];

@endphp

<label {{ $attributes($defaults)}}>{{ $label }}</label>