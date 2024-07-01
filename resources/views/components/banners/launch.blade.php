@props(['title' => '', 'description' => '', 'image' => ''])

@php
    $classes = 'flex justify-center gap-6 flex-wrap md:flex-nowrap';

    $defaults = [
        'class' => $classes,
        ];
@endphp

<div
    class="{{ $attributes($defaults) }}">
    <div class="flex flex-col items-center justify-center w-1/2 min-w-56 shrink-0 p-2">
        <div class="text-center text-gray-600 w-52 h-auto">
            <h1 class="text-3xl">{{ $title }}</h1>
            <p class="py-3">
                {{ $description }}

            </p>
            <div class="flex justify-center">
                <x-btns.button icon="bi bi-eye" link="/" label="Saiba Mais" color="info" />
            </div>
        </div>
    </div>
    <div class="p-6">
        <x-images.image image="images/banners/{{ $image }}" width="w-full" class="max-h-96" />
    </div>
</div>
