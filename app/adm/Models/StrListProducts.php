<?php 
    namespace App\str\Models;

    class StrListProducts
    {

    /** @var array|null $resultBD Recebe os valores retornados do banco de dados*/
    private array|null $resultBd;

    /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
    private bool $result;

    /**
    * @return bool Retorna true quando executar o processo com sucesso e false quando houver erro
    */
    function getResult(): bool
    {
        return $this->result;
    }

    /**
    * Retorna os registros vindos do banco de dados
    *
    * @return array|null
    */
    function getResultBd(): array|null
    {
        return $this->resultBd;
    }

        public function listProducts():void
        {
            $listProducts = new \App\str\Models\helper\StrRead();
            $listProducts->fullRead("SELECT id, product_name, product_tamanho, product_marca FROM str_products ORDER BY id DESC");

            $this->resultBd = $listProducts->getResult();
            // var_dump($this->resultBd);

            if($this->resultBd){
                $this->result = true;
            }else{
                $_SESSION['msg'] = "<p>Nenhum produto foi encontrado!</p>";
            }
        }
    }

?>