@props(['image'=> '', 'whidth'])

@php
    $classes = 'w-14';

    $defaults = [
        'class' => $classes,
    ];
    if(!$image){
        $image = '/images/users/user.png';
    }
@endphp

<x-images.image :image $width class="{{ $attributes($defaults) }}" />