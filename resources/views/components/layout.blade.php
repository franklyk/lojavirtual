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
        <x-mains.navbar/>
    </header>
    {{-- END HEADER --}}

    {{-- START MENU DROPDOWN --}}
    <div class="absolute border border-dark block overflow-x-hidden right-0 w-0 z-10" id="dropdown">

        @guest()
            <x-links.link icon="bi bi-box-arrow-in-right" link="login/create">Log In</x-links.link>

            <x-links.link icon="bi bi-person-add" link="register">Register</x-links.link>
        @endguest

        @auth()
            <x-links.link icon="bi bi-sliders" link="banners/create">Cadastrar</x-links.link>

            <form method="POST" action="/logout" id="form-logout">
                @csrf
                @method('DELETE')
                <x-links.link icon="bi bi-box-arrow-left" :link="false" type="submit" for="form-logout">Log
                    Out</x-links.link>
            </form>

            <x-links.link icon="bi bi-sliders" link="dashboard">Dashboard</x-links.link>
        @endauth
    </div>
    {{-- END MENU DROPDOWN --}}
    
    {{-- START CONTENT SITE --}}
    {{ $slot }}
    {{-- END CONTENT SITE --}}

    {{-- START FOOTER --}}
    <footer>
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
