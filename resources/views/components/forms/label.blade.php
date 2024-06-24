@props(['label', 'name'])

@php
    
    $classes = 'inline-block text-gray-500 text-lg font-medium leading-6 px-4';

    $defaults = [
        'class' => $classes,
    ];

@endphp

<label for="{{ $name }}" {{ $attributes($defaults)}}>{{ $label }}</label>