@props(['icon', 'link'])


@php
    $classes = 'flex px-4 py-3 gap-6 font-sm text-2xl overflow-x-hidden bg-white hover:bg-gray-100';

    $defaults = [
        'class' => $classes,
    ];

@endphp

<a href="{{__( '/'.$link)}}">

    <div {{ $attributes($defaults) }}>

        <i class="{{ $icon }}"></i>

        <span>{{ $slot }}</span>
    </div>
</a>
