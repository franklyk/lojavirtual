<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@vite('resources/js/app.js')

<title>{{ env('APP_NAME') }}</title>


</head>

<body>
    <header class=" container-fluid bg-white border border-dark shadow-lg px-6 py-3">
        <nav class="items-center flex justify-between ">

            <x-images.logo />

            <div class="flex gap-6 h-10 justify-center border border-black">
                <p class="m-auto">{{ $user->email }}</p>
                @php
                    if ($user->img_user) {
                        $image = $user->img_user;
                    } else {
                        $image = 'user.png';
                    }

                @endphp
                <img src="/images/users/{{ $image }}" class="rounded-full">


                <x-mains.menu />
            </div>

        </nav>

    </header>

    <x-mains.menu-dropdown />

    <main>

        {{-- {{ $slot }} --}}
    </main>

    <div>
        <x-mains.footer />

    </div>


</body>

</html>
