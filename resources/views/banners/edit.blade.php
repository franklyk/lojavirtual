<x-auth.layout-admin>

    <x-mains.page-heading>Edit</x-mains.page-heading>


    {{-- {{dd($banner)}} --}}
    
    <x-forms.form  enctype="multipart/form-data" action="/banners/{{$banner->id}}" method="post" class="md:w-3/5" data-id="form-edit">

        @method('PUT')
        {{-- {{dd($banner)}} --}}
        <x-forms.error />

        <div class="md:flex justify-center gap-6">
            <div>
                <div class="h-72 w-72 mx-auto border border-gray-400 rounded-md">
                    <label for="img_banner_edit" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_banner_edit" data-labelbanner="labelbanner">
                        <img src="/images/banners/{{$banner->img_banner}}">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="img_banner" id="img_banner_edit" label="Produto" type="file" class="h-52 w-52 mx-auto" data-imagebanner="imagebanner" />
                    
                </div>
            </div>

            <div>
                <div class="h-72 w-72 mx-auto border border-gray-400 rounded-md">
                    <label for="img_background_edit" class="cursor-pointer flex items-center justify-center w-full h-full p-4"
                        id="image_background_edit" data-labelbackground="labelbackground">
                        <img src="/images/banners/{{$banner->img_background}}">
                    </label>
                </div>
                <div class="w-72 mx-auto mb-3">
                    <x-forms.input name="img_background" id="img_background_edit" label="Background" type="file" class="h-52 w-52 mx-auto" data-imagebackground="imagebackground" />
                </div>
            </div>
        </div>
        <div>
            <x-forms.input type="text" name="title" label="Produto" value="{{$banner->title}}"/>
            <x-forms.input type="text" name="description" label="Descrição" value="{{$banner->description}}"/>
        </div>

        <div class="flex gap-6 justify-end">
            <x-btns.btn-success type="submit">Cadastrar</x-btns.btn-success>
            <x-btns.btn-warning type="reset">Limpar</x-btns.btn-warning>
        </div>

    </x-forms.form>

</x-auth.layout-admin>
