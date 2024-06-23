<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
<x-auth.layout-admin>

    <x-mains.page-heading>Create</x-mains.page-heading>


    <x-forms.error />


    <x-forms.form  enctype="multipart/form-data" action="/banners" method="post" class="border border-black" id="form-banner-product">


        <div class="md:flex justify-center gap-6">
            <div>
                <div class="h-72 w-72 mx-auto border border-gray-400 rounded-md">
                    <label for="img_banner" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_product">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="img_product" label="Produto" type="file" class="h-52 w-52 mx-auto" />
                </div>
            </div>

        </div>
        
        <div class="block md:grid gap-6 grid-flow-col auto-cols-[minmax(200px,_auto)]">
            <x-forms.input type="text" name="title" label="Produto" />
            <x-forms.input type="text" name="description" label="Descrição" />
            <x-forms.input type="text" name="description" label="Descrição" />
        </div>

        <div class="block md:grid gap-6 grid-flow-col auto-cols-[minmax(200px,_auto)]">
            <x-forms.input type="text" name="title" label="Produto" />
            <x-forms.input type="text" name="description" label="Descrição" />
            <x-forms.input type="text" name="description" label="Descrição" />
        </div>

        <div class="block md:grid gap-6 grid-flow-col auto-cols-[minmax(200px,_auto)]">
            <x-forms.input type="text" name="title" label="Produto" />
            <x-forms.input type="text" name="description" label="Descrição" />
            <x-forms.input type="text" name="description" label="Descrição" />
        </div>

        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="reset">Limpar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-auth.layout-admin>
