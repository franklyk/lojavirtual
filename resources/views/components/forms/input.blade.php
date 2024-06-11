@props(['label', 'name', 'type'])

@php

    $classes = 'rounded-lg bg-white/10 border border-neutral-400 px-5 py-2 w-full outline-none';

    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => $classes,
        'value' => old($name),
    ];
@endphp

<x-forms.field :$label :$name :$type >

    <input {{ $attributes($defaults) }}>
</x-forms.field>
