<x-layout>

    <x-mains.page-heading>Cadastrar</x-mains.page-heading>


    {{-- <x-forms.error /> --}}


    <x-forms.form enctype="multipart/form-data" action="/register" method="post" class="md:w-96 w-full"
        id="form-add-user">

        <div class="w-36 h-36 border border-gray-400 mx-auto rounded-full">

            <label for="img_user" class="cursor-pointer flex items-center justify-center w-full h-full rounded-full"
                id="image_user"></label>

            <x-forms.input name="img_user" :label="false" type="file" />

        </div>
        <div class="my-6">
            <x-forms.input type="text" name="name" label="Nome" />
            <x-forms.input type="email" name="email" label="E-mail" />
            <x-forms.input type="text" name="phone" label="Telefone" />
            <x-forms.input type="text" name="address" label="Endereço" />
            <x-forms.input type="password" name="password" label="Senha" />
            <x-forms.input type="password" name="password_confirmation" label="Corfirme A Senha" />
        </div>
        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="reset">Limpar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-layout>
