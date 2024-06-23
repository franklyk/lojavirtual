@props(['label', 'name'])

@php
    
    $classes = 'inline-block text-lg font-medium leading-6 px-4';

    $defaults = [
        'class' => $classes,
    ];

@endphp

<label for="{{ $name }}" {{ $attributes($defaults)}}>{{ $label }}</label>