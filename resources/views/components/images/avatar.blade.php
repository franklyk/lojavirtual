@php
    $classes = 'block h-12 w-12 rounded-full';

    $defaults = [
        'class' => $classes,
    ];
    if (! empty(Auth::user()->img_user) ) {
        $image = Auth::user()->img_user;
    } else {
        $image = 'user.png';
    }
@endphp

<div {{ $attributes($defaults) }}>
    
    <img src="/images/users/{{ $image }}"{{ $attributes($defaults) }}>

</div>