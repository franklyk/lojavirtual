<x-mains.layout>

    <x-mains.page-heading>Create</x-mains.page-heading>

    <x-forms.form>

        <div>
            <div class="h-52 w-52 mx-auto">
                <label for="img_banner" class="flex items-center justify-center border border-black w-full h-full p-4" id="image_banner">
                    </label>
            </div>
            <x-forms.input name="img_banner" :label="false" type="file" class="h-52 w-52 mx-auto" />
        </div>
        <div>
            <div class="h-52 w-52 mx-auto">
                <label for="img_back" class="flex items-center justify-center border border-black w-full h-full p-4" id="image_back">
                    </label>
            </div>
            <x-forms.input name="img_back" :label="false" type="file" class="h-52 w-52 mx-auto" />
        </div>

    </x-forms.form>

</x-mains.layout>
