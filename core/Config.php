<?php 

    namespace Core;

    abstract class Config
    {
        protected function configStore()
        {
            define('URL', 'http://localhost/lojavirtual/');
            define('URLADM', 'http://localhost/lojavirtual/adm/');

            define('CONTROLLER','Home');
            define('METHODE','index');
            define('CONTROLLERERRO','Erro');

            define('HOST', 'localhost');
            define('USER', 'root');
            define('PASS', '');
            define('DBNAME', 'lojavirtual');
            define('PORT', 3306);

            define('EMAILADM', 'contato@lojavirtual.com');
            define('ADM', 'LojaVirtual');
        }
    }


?>