<?php 
    namespace App\str\Controllers;

    class Dashboard
    {

        private array|string|null $data;

        public function index():void
        {
            echo " Dashboard <br><br>";

            $this->data = "Bem-vindo";

            $loadView = new \Core\ConfigView("str/Views/dashboard/dashboard", $this->data);
            $loadView->loadView();

        }
    }


?>