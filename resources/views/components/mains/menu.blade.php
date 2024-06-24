@props(['image', 'width'])

@php

    $classes = 'flex gap-6 items-center p-2';

    $defaults = [
        'class' => $classes,
    ];

    if (Auth::user()->img_user) {
        $image = Auth::user()->img_user;
    } else {
        $image = 'user.png';
    }
@endphp

<div {{ $attributes($defaults) }}>
    
    <div class="w-14 border border-black rounded-3xl p-1">
        <x-images.image image="/images/users/{{ $image }}" class="w-full h-full border rounded-3xl" />
    </div>
    <x-images.icon icon="bi bi-list cursor-pointer overflow-x-hidden " id="btn-menu" />

</div>
