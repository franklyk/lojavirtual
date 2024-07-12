<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>{{ env("APP_NAME")}}</title>

</head>

<body>
    <div class="container">
        <header class="header">
            <div class="navbar">
                <x-images.logo />
                <x-images.avatar />
            </div>
            <x-main.menu-mobile />
        </header>

        <main class="main">
            <x-main.menu-desktop />

            {{ $slot }}

        </main>
        {{-- START FOOTER --}}
        <footer class="footer">
            <div class="main-footer">
                <p class="">Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Todos os direitos Reservados
                    <br>|<br>
                    Este
                    template foi desenvolvido com <br> <i class="bi bi-heart"></i> <br> por <br> <span>KWservice</span>
                </p>
            </div>
        </footer>
        {{-- END FOOTER --}}

    </div>
</body>

</html>
