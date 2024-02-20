<?php 
    namespace App\str\Controllers;

    class Login
    {

        private array|string|null $data;

        public function index():void
        {
            echo "CONTROLLER Página Login <br><br>";

            $this->data = null;

            $loadView = new \Core\ConfigView("str/Views/login/login", $this->data);
            $loadView->loadView();

        }
    }


?>