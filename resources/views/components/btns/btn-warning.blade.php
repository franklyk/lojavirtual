@props(['type' => 'a', 'link'])

@php

    $classes =
        'relative inline-flex items-center bg-yellow-600 border border-yellow-600 text-sm font-semibold leading-6 px-4 py-2 rounded-md text-white transition ease-in-out duration-150 hover:bg-yellow-400';

    $defaults = [
        'class' => $classes,
    ];
@endphp

@if ($type == 'a')
    <a href="{{ $link }}" {{ $attributes($defaults) }}>
        <i class="{{ $icon }} text-2xl"></i>
        <span class="font-bold">{{ $label }}</span>
    </a>
@else
    <button {{ $attributes($defaults) }}>
        <i class="{{ $icon }} text-2xl"></i>
        <span class="font-bold">{{ $label }}</span>
    </button>
@endif