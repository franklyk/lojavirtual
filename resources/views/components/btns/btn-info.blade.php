@props(['type' => 'a', 'link', 'icon', 'label'])

@php

    $classes =
        'relative inline-flex items-center bg-blue-800 font-semibold gap-2 px-3 py-1 rounded-md text-sm text-white shadow-sm border border-blue-800 transition ease-in-out duration-150 hover:bg-blue-600';

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
