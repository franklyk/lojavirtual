@props(['type' => 'a', 'link', 'icon', 'label'])

@php

    $classes =
        'relative inline-flex items-center bg-red-600 font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border border-red-600 transition ease-in-out duration-150 hover:bg-red-400';

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
