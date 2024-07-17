<x-layout>
    <x-forms.fieldset legend="Edit" class="field-register">
        <x-forms.messages msg="" />
        <x-forms.form enctype="multipart/form-data" action="/user/{{ $user->id }}" method="post" class="form-edit"
            id="form-edit">
            @method('patch')
            <x-forms.input type="hidden" name="id" :label="false" value="{{ $user->id }}" />
                
            {{-- <div class="container-label-image">
                <label for="img_user" class="label-image" id="label-image">
                    <span id="preview-image" ><img src="/images/users/{{$user->id.'/'.$user->img_user}}" alt=""></span>
                </label>
            </div>

            <div class="row-column">

                <x-forms.input type="file" name="img_user" :label="false" />
            </div> --}}

            <div class="row-column">

                <x-forms.input type="text" name="first_name" label="Nome" value="{{ $user->first_name }}" />

                <x-forms.input type="text" name="last_name" label="Sobrenome" value="{{ $user->last_name }}" />

            </div>
            <div class="row-column">

                <x-forms.input type="email" name="email" label="E-mail" value="{{ $user->email }}" />

            </div>

            <div class="row-button">

                <x-btns.button type="submit" color="info" icon="bi bi-check-lg" label="Salvar" />

            </div>

        </x-forms.form>
    </x-forms.fieldset>
</x-layout>
