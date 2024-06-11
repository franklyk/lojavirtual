@props(['type' => 'a'])

@if ($type == 'a')
    <a
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-yellow-600 border border-yellow-600 text-sm font-semibold leading-6 px-4 py-2 rounded-md text-white transition ease-in-out duration-150 hover:bg-white hover:text-yellow-900']) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'relative inline-flex items-center bg-yellow-600 border border-yellow-600 text-sm font-semibold leading-6 px-4 py-2 rounded-md text-white transition ease-in-out duration-150 hover:bg-white hover:text-yellow-900']) }}>
        {{ $slot }}
    </button>
@endif
{{-- 
@props(['type' => 'a'])

@php

    $classes = 'relative inline-flex items-center bg-green-600 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-green-600 mt-3 transition ease-in-out duration-150 hover:bg-green-400 ';

    $defaults = [
        'class' => $classes,
    ]
@endphp

@if ($type == 'a')
    <a {{ $attributes($defaults)}} >
        {{ $slot }}
    </a>
@else
    <button {{ $attributes($defaults)}}>
        {{ $slot }}
    </button>
@endif --}}

