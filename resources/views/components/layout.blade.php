<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@vite('resources/js/app.js')
{{-- 
<script type="module">
    $('body').html('<h1>Hello World!</h1>');
</script> --}}

<title>{{ env('APP_NAME') }}</title>


</head>

<body>
    <header class=" container-fluid bg-white border border-dark shadow-lg px-6 py-3">
        <x-navbar />
        
    </header>
    <main class="container mx-auto">
        <x-menu-dropdown />



        {{ $slot }}
    </main>


</body>


</html>
