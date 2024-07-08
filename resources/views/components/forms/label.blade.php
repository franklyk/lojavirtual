@props(['label', 'name'])

@php
    
    $classes = 'label-input ';

    $defaults = [
        'class' => $classes,
    ];

@endphp

<label for="{{ $name }}" {{ $attributes($defaults)}}>{{ $label }}</label>