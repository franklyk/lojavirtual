<x-layout>
    {{-- {{dd($users)}} --}}
    <section class="section-page full-width">
        <x-main.page-heading title="Usuários" />
        <table>
            <thead>
                <th>Inscrição</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><x-images.icon icon="bi bi-gear-fill" /></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
