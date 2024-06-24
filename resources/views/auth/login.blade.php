<x-layout>

    <x-mains.page-heading>Login</x-mains.page-heading>

    <x-forms.form enctype="multipart/form-data" action="/login" method="post" class="md:w-96 w-full"
        id="form-add-user">

        <div class="my-6">
            <x-forms.input type="email" name="email" label="E-mail" />
            <x-forms.input type="password" name="password" label="Senha" />
        </div>
        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="reset">Limpar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-layout>
