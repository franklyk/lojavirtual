@props(['label', 'icon', 'link', 'active' => false, 'type' => 'a'])

@if ($type == 'a')
    <li class="item-menu">
        <a href="{{ $link }}" class="{{ $active ? 'bg-blue text-white' : 'bg-white text-blue' }} link-menu"
            aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }} >
            <div class="icon"><i class="{{ $icon }}"></i></div>
            <span class="label-link">{{ $label }}</span>
        </a>
    </li>
@else
    <li class="item-menu">
        <button class="bg-white text-blue link-menu" >
            <div class="icon"><i class="{{ $icon }}"></i></div>
            <span class="label-link">{{ $label }}</span>
        </button>
    </li>
@endif
