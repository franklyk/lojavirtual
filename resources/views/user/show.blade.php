<x-layout>
    <section class="section-page full-width">
        <x-main.page-heading title="Perfil">
            <x-btns.button link="/user/{{ $user->id }}/edit" icon="bi bi-eye" label="Editar Perfil" color="warning" />

            <form action="user/{{ $user->id }}" method="post" class="form-delete">
                @csrf

                @method('DELETE')
                <x-btns.button type="submit" icon="bi bi-pencil" color="danger" label="Excluir Usuário" />
            </form>

        </x-main.page-heading>

        <x-forms.messages msg="" />

        <div class="container-show-user">

            <div class="show-user-image">
                @php
                    if (!empty($user->userImage->img_user)) {

                        $image = '/'.'storage/'. $user->userImage->img_user;

                    } else {

                        $image = '/images/users/user.png';

                    }
                @endphp 
                <img src="{{ $image }}" alt="">
            </div>
            <div class="show-user">
                <table>
                    <tr>
                        <td>Inscrição:</td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
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
        </div>
        
    </section>
</x-layout>
