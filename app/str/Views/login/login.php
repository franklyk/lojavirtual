<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
    // var_dump($this->data['form']);
}
?>


<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?php echo URL ?>app/str/assets/images/login.jpg" alt="">
                    <div class="hover">
                        <h4>É Novo Por Aqui?</h4>
                        <!-- <p>There are advances being made in science and technology everyday, and a good example of this is the</p> -->
                        <a class="primary-btn" href="registration.html">Crie Uma Conta</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Login Para Acessar</h3>

                    <form class="row login_form" action="" method="post" id="form-login">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<div id='msg'>" . $_SESSION['msg'] . "</div>";
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <div id="msg"></div>
                        <?php
                        $email = "";
                        if (isset($valorForm['email'])) {
                            $email = $valorForm['email'];
                        }
                        if (isset($_COOKIE['email_login'])) {
                            $email = $_COOKIE['email_login'];
                        }
                        ?>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Usuário" value="<?php echo $email ?>">
                        </div>
                        <?php
                        $password = "";
                        if (isset($valorForm['password'])) {
                            $password = $valorForm['password'];
                        }
                        if (isset($_COOKIE['pass_login'])) {
                            $password = $_COOKIE['pass_login'];
                        }
                        ?>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha" value="<?php echo $password ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Salvar senha</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" name="SendLogin" id="SendLogin" class="primary-btn" value="Acessar">Acessar</button>
                            <a href="">Esqueceu a senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->