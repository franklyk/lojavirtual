@props(['label', 'name', 'type' => ''])


@php

    $classes = 'field';

    if ($type == 'search') {
        $classes .= ' flex gap-2';
    }

    $defaults = [
        'class' => $classes,
    ];

@endphp

<div class="row-column">

    @if ($label)
        <x-forms.label :$name :$label :$type/>
    @endif

    <div {{ $attributes($defaults) }}>

        @if ($type == 'search')
            <x-btns.button type="submit" icon="bi bi-search" :label="false" color="success" />
        @endif

        {{ $slot }}

    </div>
</div>
