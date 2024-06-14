@php

    $classes = 'block w-10/12 mx-auto space-y-6';
    $defaults = [
        'class' => $classes, 
        'method' => 'GET',
    ];
@endphp

<form {{ $attributes($defaults) }}>
    @if ($attributes->get('method', 'GET') != 'GET')
        @csrf

        @method($attributes->get('method'))
    @endif

    {{ $slot }}

</form>
