<div class="absolute border border-dark block overflow-x-hidden right-0 w-0 z-10" id="dropdown">

    @guest()
        <x-links.link icon="bi bi-box-arrow-in-right" link="login">Log In</x-links.link>
        
        <x-links.link icon="bi bi-person-add" link="register">Register</x-links.link>
    @endguest

    @auth()
        <x-links.link icon="bi bi-sliders" link="banners/create"> Cadastrar</x-links.link>

        
        <form method="POST" action="/logout" id="form-logout">
            @csrf
            @method('DELETE')
            <x-links.link icon="bi bi-box-arrow-left" :link="false" type="submit" for="form-logout">Log Out</x-links.link> 
        </form>

        <x-links.link icon="bi bi-sliders" link="dashboard">Dashboard</x-links.link>
    @endauth

</div>
