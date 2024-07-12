@props(['msg', 'session'])

@php
    $classes = 'font-samll my-10a text-center ';

    if (session('error')) {
        $session = 'error';
        $msg = session('error');
        $classes .= 'text-danger';

    } elseif (session('info')) {
        $session = 'info';
        $msg = session('info');
        $classes .= 'text-info';

    } elseif (session('success')) {
        $session = 'success';
        $msg = session('success');
        $classes .= 'text-success';

    } elseif (session('warning')) {
        $session = 'warning';
        $msg = session('warning');
        $classes .= 'text-warning';

    }else {
        $msg = $msg;
        $classes .= 'text-color';
    }

    $defaults = [
        'class' => $classes,
    ];
@endphp

@if (session('{{ $session }}'))
    <p {{ $attributes($defaults) }}> {{ session($session) }}</p>
@else

    <p {{ $attributes($defaults)}}>{{ $msg }}</p>
    
@endif
