@props(['label', 'name', 'type' => ''])

@php

    $classes = 'input-data';
    

    if($type == 'file'){
        $classes = 'input-search';
    }

    $defaults = [
        'type' => $type,
        'id' => $name,
        'name' => $name,
        'class' => $classes,
        'value' => old($name),
    ];
@endphp





<x-forms.field :$label :$name :$type>

    <input {{ $attributes($defaults) }}>
</x-forms.field>
