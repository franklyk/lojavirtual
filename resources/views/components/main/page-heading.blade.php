@props(['title'])

@php
    $classes = 'page-heading';

    $defaults = [
        'class' => $classes,
    ];
@endphp
<div {{ $attributes($defaults) }}>
    <h1 class="title-page">{{ $title }}</h1>
    <div class="buttons-page">

        {{ $slot }}

    </div>
</div>
