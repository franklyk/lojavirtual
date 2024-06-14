<x-auth.layout-admin>

    <x-mains.page-heading>Create</x-mains.page-heading>

    <x-forms.form action="/banner" method="post" enctype="multipart/form-data" class="md:w-3/5">


        <div class="md:flex justify-center gap-6">
            <div>
                <div class="h-72 w-72 mx-auto border border-gray-400 rounded-md">
                    <label for="img_banner" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_banner">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="img_banner" label="Produto" type="file" class="h-52 w-52 mx-auto" />
                </div>
            </div>

            <div>
                <div class="h-72 w-72 mx-auto border border-gray-400 rounded-md">
                    <label for="img_back" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_back">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="img_back" label="Background" type="file" class="h-52 w-52 mx-auto" />
                </div>
            </div>
        </div>
        <div>
            <x-forms.input type="text" name="title" label="Produto" />
            <x-forms.input type="text" name="description" label="Descrição" />
        </div>

        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="submit">Cancelar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-auth.layout-admin>
