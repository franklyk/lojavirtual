<?php

namespace App\str\Models;

class StrLogin
{

    private array|null $data;

    private bool|null $result;
    
    private $resultBD;

    function getResult() :bool
    {
        return $this->result;
    }

    public function login(array $data = null): void
    {
        $this->data = $data;
        // var_dump($this->data);
        $viewUser = new \App\str\Models\helper\StrRead();
        $viewUser->fullRead("SELECT id, name, email, password, str_sits_user_id FROM str_users WHERE email =:email", "email={$this->data['email']}");

        $this->resultBD = $viewUser->getResult();
        if($this->resultBD){
            $this->valEmailPerm();
        }else{
            $_SESSION['msg'] = "<p class='alert-danger'>Usuário não encontrado!</p>";
            $this->result = false;
        }
        
    }
    private function valEmailPerm():void
    {
        if($this->resultBD[0]['str_sits_user_id'] == 1){
            $this->valSession();
        }elseif($this->resultBD[0]['str_sits_user_id'] == 2){
            $_SESSION['msg'] =  "<p class='alert-danger'>Aguardando a confirmação do email! <a href='".URL."' new-conf-email/index>Clique aqui </a>para receber um novo link</p>";
        }elseif($this->resultBD[0]['str_sits_user_id'] == 3){
            $_SESSION['msg'] =  "<p class='alert-danger'>Usuário BLOQUEADO! Para liberar o acesso entre em contato com o nosso suporte em ". EMAILADM ."</p>";
        }elseif($this->resultBD[0]['str_sits_user_id'] == 4){
            $_SESSION['msg'] =  "<p class='alert-danger'>Usuário SUSPENSO! Para liberar o acesso entre em contato com o nosso suporte em ". EMAILADM ."</p>";
        }
    }


    private function valSession():void
    {
        if(password_verify($this->data['password'], $this->resultBD[0]['password'])){
                $_SESSION['user_id'] = $this->resultBD[0]['id'];
                $_SESSION['user_name'] = $this->resultBD[0]['name'];
                $_SESSION['user_email'] = $this->resultBD[0]['email'];

                $this->result = true;
        }else{
            $_SESSION['msg'] = "<p class='alert-danger'>Usuário e/ou senha incorretos!</p>";
            $this->result = false;
        }
    }
}
