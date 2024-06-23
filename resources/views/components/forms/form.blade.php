@props(['name' => ''])

@php

    $classes = 'block  md:w-10/12 w-full mx-auto px-6 py-6 space-y-6';
    $defaults = [
        'class' => $classes, 
        'method' => 'GET',
    ];
@endphp

<form {{ $attributes($defaults) }}>

    <span class="text-red-500 font-bold ">
        <x-forms.error :error="$errors->first($name)" />

    </span>

    @if ($attributes->get('method', 'GET') != 'GET')
        @csrf

        @method($attributes->get('method'))
    @endif

    {{ $slot }}

</form>
