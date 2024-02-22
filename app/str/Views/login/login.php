
<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}

//Criptografar a senha
//echo password_hash("123456a", PASSWORD_DEFAULT);
?>

<h1>Área Restrita</h1>

<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form method="POST" action="">
    <?php
    $email = "";
    if (isset($valorForm['email'])) {
        $user = $valorForm['email'];
    }
    ?>
    <label>Email: </label>
    <input type="email" name="email" id="email" placeholder="Digite o E-mail" value="<?php echo $email; ?>"><br><br>

    <?php
    $password = "";
    if (isset($valorForm['password'])) {
        $password = $valorForm['password'];
    }
    ?>
    <label>Senha: </label>
    <input type="password" name="password" id="password" placeholder="Digite a senha" value="<?php echo $password; ?>"><br><br>

    <button type="submit" name="SendLogin" id="SendLogin" value="Acessar">Acessar</button>
</form>
<br><br>