<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@vite('resources/js/app.js')

<title>{{ env('APP_NAME') }}</title>


</head>

<body>
    {{-- START HEADER --}}
    <header class=" container-fluid bg-white border border-dark shadow-lg px-6 py-3">
        <x-mains.navbar />
    </header>
    {{-- END HEADER --}}

    {{-- START MENU DROPDOWN --}}
    <x-mains.menu-dropdown />
    {{-- END MENU DROPDOWN --}}

    {{-- START CONTENT SITE --}}
    {{ $slot }}
    {{-- END CONTENT SITE --}}

    {{-- START FOOTER --}}
    <footer class="w-full">
        <div class="mt-8 w-full py-8 bg-blue-950">
            <p class="text-white text-center">Copyright &copy;
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
</body>

</html>
