@props(['image', 'width'])

@php
    $defaults = [
        'class' => $width,
    ];
@endphp

<img src="{{ asset($image) }}" {{ $attributes($defaults)}} >
