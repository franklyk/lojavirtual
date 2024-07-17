<x-layout>
    <x-forms.fieldset legend="Register" class="field-register">
        <x-forms.messages msg="" />
        <x-forms.form enctype="multipart/form-data" method="post" action="/register" class="form-register" id="form-register">

            <div class="container-label-image">
                <label for="img_user" class="label-image" id="label-image">
                    <span id="preview-image">
                        
                    </span>
                </label>
            </div>
            <x-forms.input type="file" name="img_user" :label="false" />

            <div class="row-column">
                <x-forms.input type="text" name="first_name" label="Nome" />
                <x-forms.input type="text" name="last_name" label="Sobrenome" />
            </div>
            <div class="row-column">
                <x-forms.input type="email" name="email" label="E-mail" />
            </div>
            <div class="row-column">
                <x-forms.input type="password" name="password" label="Password" />
            </div>
            <div class="row-column">
                <x-forms.input type="password" name="password_confirmation" label="Confirm the Password" />
            </div>
            <div class="options">
                <x-forms.checkbox name="remember" label="Remember Password" />
                
            </div>
            <div class="row-button">
                <x-btns.button type="submit" color="info" icon="bi bi-check-lg" label="Cadastrar"/>
            </div>
        </x-forms.form>
    </x-forms.fieldset>
</x-layout>
