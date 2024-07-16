@props(['label', 'icon', 'link', 'active' => false, 'type' => 'a'])

@if ($type == 'a')
    <li class="item-menu">
        <a href="{{ $link }}" class="{{ $active ? 'bg-site-color-light text-white' : 'bg-site-color text-white' }} link-menu"
            aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }} >
            <div class="icon"><i class="text-white {{ $icon }}"></i></div>
            <span class="label-link">{{ $label }}</span>
        </a>
    </li>
@else
    <li class="item-menu">
        <button class="bg-site-color text-white link-menu" >
            <div class="icon"><i class="text-white {{ $icon }}"></i></div>
            <span class="label-link">{{ $label }}</span>
        </button>
    </li>
@endif
