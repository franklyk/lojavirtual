@props(['label', 'name', 'type'])

@php

    $classes = 'input-data';

    if ($type == 'file') {
        $classes = 'input-file';
    }

    $defaults = [
        'type' => $type,
        'name' => $name,
        'id' => $name,
        'class' => $classes,
        'value' => old($name),
    ];
@endphp





<x-forms.field :$type :$label :$name>

    <input {{ $attributes($defaults) }}>

</x-forms.field>
