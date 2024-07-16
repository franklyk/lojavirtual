<x-layout>
    <section class="section-page full-width">
        <x-main.page-heading title="Perfil = {{ $user->name }}" />

        <x-forms.messages msg="" />

        {{-- {{dd($user)}} --}}

        <div class="container-show-user">
            <div class="show-user-image">

                <div class="image">
                    @php
                        if(!empty($user->img_user)){
                            $image = $user->id . '/' . $user->img_user;
                        }else{
                            $image = 'user.png';
                        }
                    @endphp
                    <img src="/images/users/{{$image}}" alt="">
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
        </div>
        <div class="container-buttons">
            <x-btns.button link="/user/{{ $user->id }}/edit" icon="bi bi-pencil" color="warning"
                label="Editar Usuário" />
            <form action="" method="post" class="form-delete">
                @csrf

                @method('DELETE')
                <x-btns.button link="/user/{{ $user->id }}/edit" icon="bi bi-pencil" color="danger"
                    label="Excluir Usuário" />
            </form>
        </div>
    </section>
</x-layout>
