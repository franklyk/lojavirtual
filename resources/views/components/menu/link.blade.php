@props(['href', 'label' => null])

<x-menu.item>
    <a href="{{ $href }}" class="menu-link">
        {{ $slot }}
        {{ $label }}
    </a>
</x-menu.item>
