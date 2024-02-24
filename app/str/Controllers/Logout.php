<?php 

    namespace App\str\Controllers;

    // if(!defined('KLKSK8')){
    //     $urlRedirect = "http://localhost/kwservice/adm/login/index";
    //     header("Location: $urlRedirect");
    //     die("Erro: Página não encontrada!<br>");
    // }
    
    /**
    * Controller da Página de Sair
    * 
    * @author Franklin (" KLYK ") <frsbatist@gmail.com>
    *
    * @return void
    */

    class Logout
    {

        /**
         * Destruir as sessões do usuario logado
         *
         * @return void
         */
        public function index():void
        {
            setcookie("email_login","", time() - 3600, "/", "", false, false);
            setcookie("pass_login","", time() - 3600, "/", "", false, false);
            unset($_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_email']);

            $_SESSION['msg'] = "<p class='alert-success'>Logout realizado com sucesso!</p><br>";

            $urlRedirect = URL . "login/index";
            header("Location: $urlRedirect");
        }
    }


?>