<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
    // var_dump($this->data['form']);
}
?>

<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="content-form">
                <div class="row">

                    <form method="post" action="" class="form form-login radius" name="form-login" id="form-login">

                        <div class="form-header-login">
                            <img src="<?php echo URL ?>app/str/assets/images/logo/logo.png" alt="" width="200">

                            <div class="title-content">
                                <span>Login</span>
                            </div>
                        </div>
                        <div id="result">
                            <?php
                            if (isset($_SESSION['msg'])) {
                                echo "<div id='msg'>" . $_SESSION['msg'] . "</div>";
                                unset($_SESSION['msg']);
                            }
                            ?>
                            <div id="msg"></div>
                        </div>
                        <div class="row-input">
                            <?php
                            $email = "";
                            if (isset($valorForm['email'])) {
                                $email = $valorForm['email'];
                            }
                            if(isset($_COOKIE['email_login'])){
                                $email = $_COOKIE['email_login'];
                            }
                            ?>
                            <div>
                                <div class="field-data data-name">
                                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="input-data font-medium radius" required><br><br>
                                    <label for="email" class="label-input">E-mail:</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="row-input">
                            <?php
                            $password = "";
                            if (isset($valorForm['password'])) {
                                $password = $valorForm['password'];
                            }
                            if(isset($_COOKIE['pass_login'])){
                                $password = $_COOKIE['pass_login'];
                            }
                            ?>
                            <div>
                                <div class="field-data data-name">
                                    <input type="password" name="password" id="password" value="<?php echo $password;?>" class="input-data font-medium radius" required><br><br>
                                    <label for="password" class="label-input">Senha:</label><br>
                                    <i class="icon fa-regular fa-eye" id="eye-view-pass" onclick="showPass()"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row-input">
                            <div class="pass-save">
                                <input type="checkbox" name="remember" id="remember" checked>
                                <label for="remember">Salvar Senha</label>
                            </div>
                        </div>

                        <div class="signup-link">
                            <a href="#">Cadastrar</a> - <a href="#">Esqueceu a senha?</a>
                        </div>

                        <div class="row-input">


                        
                            <button type="reset" class="btn btn-warning radius" name="CancelLogin" id="CancelLogin" value="Cancelar">Cancelar</button>
                            <button type="submit" class="btn btn-success radius" name="SendLogin" id="SendLogin" value="Acessar">Acessar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>