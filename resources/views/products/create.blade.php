<x-layout>

    <x-mains.page-heading>Create Product</x-mains.page-heading>


    <x-forms.error />


    <x-forms.form  enctype="multipart/form-data" action="/banners" method="post" class="md:w-3/5 border border-gray-200" id="register-product-form">

        <div class="md:flex justify-center gap-6">
            <div>
                <div class="h-72 w-72 mx-auto border border-gray-400 rounded-md">
                    <label for="product_image" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_label">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="product_image" :label="false" type="file" class="h-52 w-52 mx-auto" />
                </div>
            </div>
        </div>
        <div class="my-6">
            <x-forms.input type="text" name="category" label="Produto" />
            <x-forms.input type="text" name="brand" label="Marca" />
            <x-forms.input type="text" name="model" label="Modelo" />
            <x-forms.input type="text" name="size" label="Tamanho" />
            <x-forms.input type="text" name="color" label="Cor" />
            <x-forms.input type="text" name="cost" label="Custo" />
            <x-forms.input type="text" name="price" label="Preço" />
            <x-forms.input type="text" name="manufacturer" label="Fabricante" />
            <x-forms.input type="text" name="distributor" label="Distribuidor" />
        </div>

        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="reset">Limpar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-layout>
