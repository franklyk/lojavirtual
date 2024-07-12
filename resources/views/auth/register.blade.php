<x-layout>
    <x-forms.fieldset legend="Register" class="field-register">
        <x-forms.messages />
        <x-forms.form method="post" class="form-register" id="form-register">
            <div class="row-column">
                <x-forms.input type="text" name="name" label="Nome" />
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
