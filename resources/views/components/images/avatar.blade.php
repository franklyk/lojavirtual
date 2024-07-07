@php
    $classes = 'avatar';

    $defaults = [
        'class' => $classes,
    ];
    if (! empty(Auth::user()) ) {
        $email = Auth::user()->email;
        if(! empty(Auth::user()->img_use)){
        }else{
            $image = 'user.png';
        }
    } else {
        $email = '';
        $image = 'user.png';
    }
@endphp
<div class="container-avatar">
    
    <p class="user-email">{{ $email }}</p>
    <div {{ $attributes($defaults) }}>
        <img src="/images/users/{{ $image }}" class="avatar">
    
    </div>

</div>
