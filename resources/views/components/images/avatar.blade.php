@php
    $classes = 'block h-12 w-12 rounded-full';

    $defaults = [
        'class' => $classes,
    ];
    if (! empty(Auth::user()) ) {
        $email = Auth::user()->email;
        $image = Auth::user()->img_user;
    } else {
        $email = '';
        $image = 'user.png';
    }
@endphp
<div class="flex gap-3 items-center">
    
    <p class="hidden md:block text-lg font-bold text-gray-400">{{ $email }}</p>
    <div {{ $attributes($defaults) }}>
        <img src="/images/users/{{ $image }}"{{ $attributes($defaults) }}>
    
    </div>

</div>
