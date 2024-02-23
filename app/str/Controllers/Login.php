<?php 
    namespace App\str\Controllers;

    class Login
    {

        private array|string|null $data = [];
        private array|null $dataForm;

        public function index():void
        {
            $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            
            if(!empty($this->dataForm['SendLogin'])){
                
                unset($this->dataForm['SendLogin']);

                
                // setcookie("LBlocked", 1, 86400, '/');
                // $time = time() + (3600 * 24 *30);

                // $email = $PostFilters['login_email'];
                // $pass = $PostFilters['login_password'];

                // setcookie("le", $email, $time, '/');
                // setcookie("lp", $pass, $time, '/');

                $valLogin = new \App\str\Models\StrLogin();
                $valLogin->login($this->dataForm);
                if($valLogin->getResult()){
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