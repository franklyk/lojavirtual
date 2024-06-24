@php
    $classes = 'block w-44';

    $defaults = [
        'class' => $classes,
    ];
@endphp

<a href="/">
    <div {{ $attributes($defaults) }}>
    
        <img src="/images/logo/logo.png">
    
    </div>
</a>