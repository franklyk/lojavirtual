<?php 
    namespace App\str\Controllers;

    class Login
    {

        private array|string|null $data = [];
        private array|null $dataForm;

        public function index():void
        {
            $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            // var_dump($this->dataForm);
            if(!empty($this->dataForm['SendLogin'])){
                
                unset($this->dataForm['SendLogin']);
                
                $valLogin = new \App\str\Models\StrLogin();
                $valLogin->login($this->dataForm);
                if($valLogin->getResult()){
                    if(!empty($this->dataForm['remember'])){
                        setcookie("email_login", $this->dataForm['email'], time() + 3600, "/", "", false, false);
                        setcookie("pass_login",  $this->dataForm['password'], time() + 3600, "/", "", false, false);
                    }

                    $urlRedirect = URL . "Dashboard/index";
                    header("Location: $urlRedirect");
                }
            }else{
                $this->data['form'] = $this->dataForm;;
            }
            $loadView = new \Core\ConfigView("str/Views/login/login", $this->data);
            $loadView->loadView();

        }
    }


?>