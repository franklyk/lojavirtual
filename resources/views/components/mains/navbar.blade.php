<nav class="items-center flex justify-between ">


    <x-images.logo />

    @guest()
        <x-mains.menu />
    @endguest


</nav>
