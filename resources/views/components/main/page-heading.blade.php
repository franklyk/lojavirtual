@props(['title'])

@php
    $classes = 'page-heading text-color text-center full-width';

    $defaults = [
        'class' => $classes,
    ];
@endphp

<h1 {{ $attributes($defaults)}}>{{ $title }}</h1>
