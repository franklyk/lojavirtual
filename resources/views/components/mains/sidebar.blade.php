<nav class="sidebar" id="menu-desk-top">
    <ul class="container-links">
        
        <x-links.link link="/" icon="bi bi-house" label="Home" :active="request()->is('/')" />

        <x-links.link link="dashboard" icon="bi bi-columns-gap" label="Dashboard" :active="request()->is('dashboard')" />

        <x-links.link link="user" icon="bi bi-person" label="Usuário" :active="request()->is('user')" />

        <x-links.link link="login" icon="bi bi-box-arrow-in-right" label="Entrar" :active="request()->is('login')" />

        <x-links.link type="submit" icon="bi bi-box-arrow-right" label="Logout" :active="request()->is('logout')" />

    </ul>

</nav>