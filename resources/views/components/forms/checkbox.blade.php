@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'name' => $name,
        'id' => $name,
        'checked' => true,
    ];
@endphp

<div class="checkbox">
    
    <input {{ $attributes($defaults) }}>
    <label for="{{ $name }}">{{ $label }}</label>
    
</div>
{{-- <x-forms.field :$name :$label> --}}
{{-- </x-forms.field> --}}
