<?php 

namespace App\str\Models;

use App\str\Models\helper\StrConn;
use PDO;
class StrLogin extends StrConn
{
    private array $data;
    private object $conn;
    private $resultBd;
    private $result;

    function getResult(){
        return $this->result;
    }

    public function login(array $data = null): void
    {
        $this->data = $data;
        // var_dump($this->data);
        //Instanciar o metodo quando a classe é publica
        // $connetct = new \App\str\Models\helper\StrConn();
        // $conn = $connetct->connectDb();
        // var_dump($conn);


        //Instanciar o metodo quando a classe é abstrata(a classe StrLogin é filha da classe StrConn)
        $this->conn = $this->connectDb();
        // var_dump($conn);
        $query_val_login = "SELECT id, name, email, password 
        FROM str_users
        WHERE email =:email
        LIMIT 1";
        $result_val_login = $this->conn->prepare($query_val_login);
        $result_val_login->bindParam(':email', $this->data['email'], PDO::PARAM_STR);
        $result_val_login->execute();

        $this->resultBd = $result_val_login->fetch();
        if($this->resultBd){
            // var_dump($this->resultBd);
            $this->valPassword();

        }else{
            $_SESSION['msg'] = "<p>Erro: Usuário não encontrado!</p>";
            $this->result = false;

        }

    }

    private function valPassword()
    {
        if(password_verify($this->data['password'], $this->resultBd['password'])){
            // $_SESSION['msg'] = "<p>Login realizado com sucesso</p>";
            $_SESSION['user_id'] = $this->resultBd['id'];
            $_SESSION['user_name'] = $this->resultBd['name'];
            $_SESSION['user_email'] = $this->resultBd['email'];
            $this->result = true;
        }else{
            $_SESSION['msg'] = "<p>Erro: Senha incorreta!</p>";
            $this->result = false;
        }

    }
}

?>