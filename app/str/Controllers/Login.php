<?php 
    namespace App\str\Controllers;

    class Login
    {

        private array|string|null $data = [];
        private array|null $dataForm;

        public function index():void
        {
            $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            var_dump($this->dataForm);
            if(!empty($this->dataForm['SendLogin'])){
                $valLogin = new \App\str\Models\StrLogin();
            }else{
                $this->data['form'] = $this->dataForm;;
            }

            // $this->data = null;



            $loadView = new \Core\ConfigView("str/Views/login/login", $this->data);
            $loadView->loadView();

        }
    }


?>