@props(['label', 'name', 'type' => ''])


@php

    $classes = 'mt-1';

    if ($type == 'search') {
        $classes .= ' flex gap-2';
    }

    $defaults = [
        'class' => $classes,
    ];

@endphp

<div class="autoGrid">

    @if ($label)
        <x-forms.label :$name :$label :$type/>
    @endif

    <div {{ $attributes($defaults) }}>

        @if ($type == 'search')
            <x-btns.btn-success type="submit" icon="bi bi-search" :label="false" class="text-xl font-bold " />
        @endif

        {{ $slot }}

    </div>
</div>
