@props(['label', 'name', 'type' => '', 'icon'])


@php

    $classes = 'mt-1';

    if ($type == 'search') {
        $classes .= ' flex gap-2';
    }

    if ($type == 'file') {
        $classes .= '';
    }

    $defaults = [
        'class' => $classes,
    ];

@endphp

<div>

    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div {{ $attributes($defaults) }}>

        @if ($type == 'file')

            <div class="h-52 w-52 mx-auto">
                <label for="{{ $name }}" class="flex items-center justify-center border border-black w-full h-full"> <i class="text-gray-200 text-7xl bi bi-camera-fill"></i> </label>
                
            </div>
        @endif

        @if ($type == 'search')
            <x-btns.btn-success type="submit"><i class="text-xl font-bold bi bi-search"></i></x-btns.btn-success>
        @endif

        {{ $slot }}

    </div>
    <x-forms.error :error="$errors->first($name)" />
</div>
