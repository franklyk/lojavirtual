@props(['type' => 'a', 'link', 'icon', 'label', 'color'])

@php

    $classes = 'relative inline-flex items-center font-semibold px-3 py-2 rounded-md text-sm text-white shadow-sm border  transition ease-in-out duration-150';

    if( $color == 'success'){
        $classes .= ' bg-green-600 border-green-600 hover:bg-green-400 ';
    }elseif ( $color == 'danger') {
        $classes .= ' bg-red-600 border-red-600 hover:bg-red-400 ';
    }elseif ( $color == 'warning') {
        $classes .= ' bg-yellow-600 border-yellow-600 hover:bg-yellow-400 ';
    }else {
        $classes .= ' bg-blue-600 border-blue-600 hover:bg-blue-400 ';
    }

    $defaults = [
        'class' => $classes,
    ]
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