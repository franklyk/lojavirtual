<x-layout>
    <x-forms.fieldset legend="Recover Password " class="field-login">
        <x-forms.messages  msg="Enviaremos um E-mail para recuperar a sua senha"/>
        <x-forms.form action="/forgot-password" method="post" class="form-login" id="form-login">
            <div class="row-column">
                <x-forms.input type="email" name="email" label="E-mail" />
            </div>
            <div class="options">
                <div class="account">
                    <a href="/login">Remembered the password?</a>
                </div>
            </div>
            <div class="row-button">
                <x-btns.button type="submit" color="info" icon="bi bi-check-lg" label="Send"/>
            </div>
        </x-forms.form>
    </x-forms.fieldset>
</x-layout>
