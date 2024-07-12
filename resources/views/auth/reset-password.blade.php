<x-layout>
    <x-forms.fieldset legend="New Password" class="field-login">
        <x-forms.form method="post" action="/reset-password" class="form-login" id="form-login">
            <div class="row-column">
                <x-forms.input type="hidden" name="token" :label="false" value="{{$token}}"/>
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
            
            <div class="row-button">
                <x-btns.button type="submit" color="info" icon="bi bi-check-lg" label="Entrar"/>
            </div>
        </x-forms.form>
    </x-forms.fieldset>
</x-layout>
