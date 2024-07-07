<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>Document</title>

</head>

<body>
    <div class="container">
        <header class="header">
            <div class="navbar">
                <x-images.logo />
                <x-images.avatar />
            </div>
            <x-mains.menu-mobile />
        </header>
        
        <x-mains.sidebar/>
    </div>



</body>

</html>
