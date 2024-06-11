@props(['type' => 'a', 'link'])

@php

    $classes = 'relative inline-flex items-center bg-green-600 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-green-600 transition ease-in-out duration-150 hover:bg-green-400 ';

    $defaults = [
        'class' => $classes,
    ]
@endphp

@if ($type == 'a')
    <a href="{{ $link }}" {{ $attributes($defaults)}} >
        {{ $slot }}
    </a>
@else
    <button {{ $attributes($defaults)}}>
        {{ $slot }}
    </button>
@endif
