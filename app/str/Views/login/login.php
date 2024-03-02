<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
    // var_dump($this->data['form']);
}
?>
<!-- 
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
</div> -->


	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registration.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
