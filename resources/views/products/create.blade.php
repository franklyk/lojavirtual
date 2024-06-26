<x-layout>

    <x-mains.page-heading>Create</x-mains.page-heading>


    <x-forms.error />


    <x-forms.form  enctype="multipart/form-data" action="/banners" method="post" class="md:w-3/5 border border-gray-200" id="form-banner-add">

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
                    <label for="img_background" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_background">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="img_background" label="Background" type="file" class="h-52 w-52 mx-auto" />
                </div>
            </div>
        </div>
        <div class="my-6">
            <x-forms.input type="text" name="title" label="Produto" />
            <x-forms.input type="text" name="description" label="Descrição" />
        </div>

        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="reset">Limpar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-layout>
