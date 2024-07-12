<x-layout>
    {{-- {{Auth::user()->name}} --}}
    <x-forms.fieldset legend="Login" class="field-login">
        <x-forms.messages msg="Faça o login para acessar a sua conta!" />
        <x-forms.form method="post" class="form-login" id="form-login">
            <div class="row-column">
                <x-forms.input type="email" name="email" label="E-mail" />
            </div>
            <div class="row-column">
                <x-forms.input type="password" name="password" label="Password" />
            </div>
            <div class="options">
                <x-forms.checkbox name="remember" label="Remember Password" />
                <div class="account">
                    <a href="/register">Create Account</a>
                    <a href="/forgot-password">Forgot password?</a>
                </div>
            </div>
            <div class="row-button">
                <x-btns.button type="submit" color="info" icon="bi bi-check-lg" label="Entrar"/>
            </div>
        </x-forms.form>
    </x-forms.fieldset>
</x-layout>
