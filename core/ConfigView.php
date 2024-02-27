<?php 
    namespace Core;

    class ConfigView
    {
        public function __construct(private string|null $nameView, private array|string|null $data)
        {            
        }

        public function loadView():void
        {
            if(file_exists('app/' .$this->nameView . '.php')){
                include 'app/str/Views/include/head.php';  
                // include 'app/str/Views/include/navbar.php';
                // include 'app/str/Views/include/menu.php';
                include 'app/' .$this->nameView . '.php';
                include 'app/str/Views/include/footer.php';
            }else {
                die("ConfigView - Por Favor tente novamente! Se o problema persistir, entre em contato com o administrador em " . EMAILADM);
            }
        }

    }

?>