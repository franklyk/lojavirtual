<x-layout>
    <section class="section-page full-width">
        <x-main.page-heading title="Usuários" />
        <table>
            <thead>
                <th>Inscrição</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Config</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="actions">
                            <x-btns.button link="/user/{{ $user->id }}" icon="bi bi-eye" :label="false"
                                color="info" class="btn-dropdown-action" id="{{ $user->id }}" />

                            <x-btns.button link="/user/{{ $user->id }}/edit" icon="bi bi-pencil" :label="false"
                                color="warning" class="btn-dropdown-action" id="{{ $user->id }}" />

                            <form action="/user" method="post">
                                @csrf
                                @method('DELETE')
                                <x-btns.button type="submit" icon="bi bi-trash" :label="false" color="danger"
                                    class="btn-dropdown-action" id="{{ $user->id }}" />
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
