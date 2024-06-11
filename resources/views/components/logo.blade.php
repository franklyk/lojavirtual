
@php
    $classes = 'w-44';

    $defaults = [
        'class' => $classes,
    ];

@endphp
<div {{$attributes($defaults)}}>
    <x-image image="/images/logo/logo.png" width="w-full" />
</div>