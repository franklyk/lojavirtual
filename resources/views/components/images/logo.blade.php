
@php
    $classes = 'w-44';

    $defaults = [
        'class' => $classes,
    ];

@endphp
<a href="/">
    <div {{$attributes($defaults)}}>
    <x-images.image image="/images/logo/logo.png" width="w-full" />
</div>
</a>
