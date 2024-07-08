@props(['name' => ''])

@php

    $classes = 'form ';
    $defaults = [
        'class' => $classes, 
        'method' => 'GET',
    ];
@endphp

<form {{ $attributes($defaults) }}>

    <span class="">
        <x-forms.error :error="$errors->first($name)" />

    </span>

    @if ($attributes->get('method', 'GET') != 'GET')
        @csrf

        @method($attributes->get('method'))
    @endif

    {{ $slot }}

</form>
