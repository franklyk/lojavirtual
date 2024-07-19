<x-layout>
    <section class="section-page">
        <x-main.page-heading title="Usuários">
            <x-btns.button link="/register" icon="bi bi-person-add" label="Cadastrar" color="success" />
        </x-main.page-heading>
        <x-forms.messages msg="" />
        <div class="list-users">
            <table>
                <thead>
                    <th>Avatar</th>
                    <th>Inscrição</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Config</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        {{-- {{dd($user->userImage->img_user)}}  --}}
                        <tr>
                            <td class="container-avatar">
                                <div class="list-users-avatar">
                                    {{-- {{dd($user->userImage->img_user )}} --}}   
                                    @php
                                        if (!empty($user->userImage->img_user)) {

                                            $image = 'storage/'. $user->userImage->img_user;

                                        } else {

                                            $image = '/images/users/user.png';

                                        }
                                        // dd($image);
                                    @endphp
                                    <img class="img-avatar" src="{{ $image }}" alt="">
                                </div>
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="actions">
                                <x-btns.button link="/user/{{ $user->id }}" icon="bi bi-eye" label="Visualizar"
                                    color="info" class="btn-dropdown-action" id="{{ $user->id }}" />
                                {{-- <form action="/user/{{$user->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <x-btns.button type="submit" icon="bi bi-trash" label="Excluir" color="danger"
                                        class="btn-dropdown-action" id="{{ $user->id }}" />
                                </form> --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
