<?php 

    namespace App\str\Models;

    use App\str\Models\helper\StrConn;

    class StrLogin extends StrConn
    {

        private array|null $data;
        private object $conn;
        private $resultBD;
        private $result;

        public function login(array|null $data = null):void
        {
            $this->data = $data;

            $this->conn = $this->connectDB();

            $query_val_login = "SELECT id, name, email, password FROM str_users WHERE email =:email LIMIT 1";

        }
    }

?>