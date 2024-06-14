@props(['label'])

<label {{ $attributes->merge(['class' => 'inline-block text-lg font-medium leading-6 px-4'])}}>{{ $label }}</label>