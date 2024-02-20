<?php 
    namespace Core;

    class ConfigView
    {
        public function __construct(private string|null $nameView, private array|null $data)
        {            
        }

        public function loadView():void
        {
            if(file_exists("app/" .$this->nameView. ".php")){
                include "app/" .$this->nameView. ".php";
            }else{
                die("Erro: Por favor tente novamente! Se o problema persistir entre em contato conosco em ". EMAILADM);
            }
        }

    }

?>