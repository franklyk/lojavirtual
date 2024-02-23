<?php
    namespace App\str\Models;
    
    
    class StrAddProducts
    {

        /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
        private bool $result = false;

            /** @var array|null $data Recebe as informações do formulário */
        private array|null $data;
        /**
         * @return bool Retorna true quando executar o processo com sucesso e false quando houver erro
         */
        function getResult(): bool
        {
            return $this->result;
        }

        public function create($data): void
        {
            $this->data = $data;
            $this->data['created'] = date("Y-m-d H:i:s");


            // $this->valExtImg();
            $createImage = new \App\str\Models\helper\StrCreate();
            $createImage->exeCreate("str_products", $this->data);
            if($createImage->getResult()){
                
                $this->result = true;
                $_SESSION['result'] = "<p class='alert-success'>Cadastrado com sucesso!</p>";
                $this->result = true;
            }else{
                $_SESSION['result'] = "<p class='alert-danger'>Falha ao cadastrar!</p>";
                $this->result = false;
            }
        }
        
    }

?>
