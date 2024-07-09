@props(['type' => 'a', 'link', 'icon', 'label', 'color'])

@php

    $classes = 'btn ';

    if( $color == 'danger'){

        $classes .= 'btn-danger';

    }elseif ( $color == 'info') {

        $classes .= 'btn-info';

    }elseif ( $color == 'success') {

        $classes .= 'btn-success';

    }else {

        $classes .= 'btn-warning';

    }

    $defaults = [
        'class' => $classes,
    ]
@endphp

@if ($type == 'a')
    <a href="{{ $link }}" {{ $attributes($defaults) }}>
        <i class="icon {{ $icon }} "></i>
        <span class="label-button">{{ $label }}</span>
    </a>
@else
    <button {{ $attributes($defaults) }}>
        <i class="icon {{ $icon }}"></i>
        <span class="label-button">{{ $label }}</span>
    </button>
@endif