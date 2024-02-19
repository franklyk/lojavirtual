<?php 

class ConfigController
{

    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlMethod;
    private string $urlParameter;



    function __construct()
    {
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            // var_dump($this->url);

            $this->urlArray = explode("/", $this->url);
            // var_dump($this->urlArray);

            if(isset($this->urlArray[0])){
                $this->urlController = $this->urlArray[0];
                // var_dump($this->urlController);
            }else{
                $this->urlController = CONTROLLER;
            }

            if(isset($this->urlArray[1])){
                $this->urlMethod = $this->urlArray[1];
                // var_dump($this->urlMethod);
            }else{
                $this->urlMethod = METHODE;
            }

            if(isset($this->urlArray[2])){
                $this->urlParameter = $this->urlArray[2];
                // var_dump($this->urlParameter);
            }else{
                $this->urlParameter = '';
            }

        }else{
            $this->urlController = CONTROLLER;
            $this->urlMethod = METHODE;
            $this->urlParameter = '';
        }

        echo "Controller: {$this->urlController} <br> <br>";
        echo "Metodo: {$this->urlMethod} <br> <br>";
        echo "Parâmetro: {$this->urlParameter} <br> <br>";
    }

    public function loadPage(): void
    {
        require './app/str/Controllers/Home.php';
        $home = new Home();
        $home->index();
        
        require './app/str/Controllers/Cart.php';
        $cart = new Cart();
        $cart->index();
    }
}

?>