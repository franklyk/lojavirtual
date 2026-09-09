@props([
    'label' => null,
    'color' => 'primary',
    'icon' => 'search',
    'type' => 'submit',
])

<x-buttons.button
    :color="$color"
    :icon="$icon"
    :label="$label"
    :type="$type"
    class="form-search-button"
    {{ $attributes }}
/>
