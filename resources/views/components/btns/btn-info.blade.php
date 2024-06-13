@props(['type' => 'a'])

@php

    $classes =
        'relative inline-flex items-center bg-blue-800 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-blue-800 transition ease-in-out duration-150 hover:bg-blue-600';

    $defaults = [
        'class' => $classes,
    ];
@endphp

@if ($type == 'a')
    <a {{ $attributes($defaults) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes($defaults) }}>
        {{ $slot }}
    </button>
@endif
