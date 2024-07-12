<x-layout>
    <section class="section-page full-width">
        <x-main.page-heading title="Perfil = {{ $user->name }}" />

        <div class="show-user-image">
            <div class="label-container-image">
                
            </div>
            <div class="image">

                <img src="/images/users/user.png" alt="">

            </div>
        </div>
        <div class="show-user">
            <table>
                <tr>
                    <td>Inscrição:</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Validado Em:</td>
                    <td>{{ $user->email_verified_at }}</td>
                </tr>
                <tr>
                    <td>Inscrito em:</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <td>Última atualização em:</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>

            </table>
        </div>
    </section>
</x-layout>
