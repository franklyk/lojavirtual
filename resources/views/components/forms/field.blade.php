@props(['label', 'name', 'type' => '', 'icon'])


@php

    $classes = 'mt-1';

    if ($type == 'search') {
        $classes .= ' flex gap-2';
    }

    if ($type == 'file') {
    }

    $defaults = [
        'class' => $classes,
    ];

@endphp

<div>

    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div {{ $attributes($defaults) }}>

        @if ($type == 'file')

            
        @endif

        @if ($type == 'search')
            <x-btns.btn-success type="submit"><i class="text-xl font-bold bi bi-search"></i></x-btns.btn-success>
        @endif

        {{ $slot }}

    </div>
</div>
