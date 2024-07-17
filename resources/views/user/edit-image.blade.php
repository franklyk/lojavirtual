<x-layout>
    {{ dd($img_user) }}
    <x-forms.fieldset legend="Edit" class="field-register">
        <x-forms.messages msg="" />
        <x-forms.form enctype="multipart/form-data" action="{{ route('update.image')->$img_user->id }}" method="post"
            class="form-edit" id="form-edit">
            @method('patch')
            <x-forms.input type="hidden" name="id" :label="false" value="{{ $img_user->id }}" />
            <div class="container-label-image">
                <label for="img_user" class="label-image" id="label-image">
                    <span id="preview-image"></span>
                </label>
            </div>

            <div class="row-column">

                <x-forms.input type="file" name="img_user" :label="false" />
            </div>

            <div class="row-button">
                <x-btns.button type="submit" color="info" icon="bi bi-check-lg" label="Salvar" />
            </div>
        </x-forms.form>
    </x-forms.fieldset>
</x-layout>
