<x-layout>
    <fieldset class="fieldset">
        <legend>
            <h1>Login</h1>
        </legend>
        <form action="" method="post" class="form">
            <div class="row-column">
                <div class="field">
                    <label for="email" class="label-input">E-mail</label>
                    <input type="text" name="email" id="email" class="input-data">
                </div>
            </div>
            <div class="row-column">
                <div class="field">
                    <label for="password" class="label-input">Password</label>
                    <input type="text" name="password" id="password" class="input-data">
                </div>
            </div>
            <div class="options">
                <div class="field-checkbox">
                    <input type="checkbox" class="remember" id="remember" name="remember">
                    <label for="remember">Remember</label>
                </div>
                <div class="account">
                    <a href="">Create Account</a>
                    <a href="">Forgot password?</a>
                </div>
            </div>
            <div class="row-button">
                <button type="submit" class="btn btn-info"><span><i class="icon bi bi-check-lg"></i></span>Entrar</button>
            </div>
        </form>
    </fieldset>
</x-layout>
