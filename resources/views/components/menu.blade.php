@php

    $classes = 'flex items-center p-2 space-x-2 relative';

    $defaults =[
        'class' => $classes,
    ];
@endphp

<div {{$attributes($defaults)}}>

    <div>
        <x-user />
    </div>

    <div>
        <x-icon icon="bi bi-list cursor-pointer overflow-x-hidden " id="btn-menu"/>
    </div>

</div>
