<?php 
    namespace App\str\Models\helper;

use PDO;
use PDOException;

    abstract class StrConn
    {
        private string $host = HOST;
        private string $user = USER;
        private string $pass = PASS;
        private string $dbname = DBNAME;
        private int|string $port = PORT;
        private object $connect;

        protected function connectDb():object
        {
            try{
                //Conexão com a porta
                $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname, $this->user, $this->pass);
                
                //Conexão sem a porta
                // $this->connect = new PDO("mysql:host={$this->host};dbname=" . $this->dbname, $this->user, $this->pass);
                return $this->connect;
            }catch(PDOException $err) {
                die("ConfigView - Por Favor tente novamente! Se o problema persistir, entre em contato com o administrador em " . EMAILADM);
            }
        }
    }


?>