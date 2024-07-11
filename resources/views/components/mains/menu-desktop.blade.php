<nav class="menu-desktop" id="menu-desk-top">
    <ul class="container-links">

        <x-btns.link link="/" icon="bi bi-house" label="Home" :active="request()->is('/')" />

        <x-btns.link link="/dashboard" icon="bi bi-columns-gap" label="Dashboard" :active="request()->is('dashboard')" />

        <x-btns.link link="/user" icon="bi bi-person" label="Usuário" :active="request()->is('user')" />

        <x-btns.link link="/login" icon="bi bi-box-arrow-in-right" label="Entrar" :active="request()->is('login')" />


        <form method="post" action="/logout">
            @csrf

            @method('DELETE')
            
            <x-btns.link type="submit" icon="bi bi-box-arrow-right" label="Logout" />

        </form>
    </ul>

</nav>
