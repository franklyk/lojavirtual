<?php

namespace Core;

class ConfigController extends config
{

    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlMethode;
    private string $urlParameter;
    private string $classLoad;
    private string $urlSlugController;
    private string $urlSlugMethode;




    function __construct()
    {
        $this->configStore();
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            // var_dump($this->url);
            $this->cleanUrl();
            $this->urlArray = explode("/", $this->url);
            // var_dump($this->urlArray);

            if (isset($this->urlArray[0])) {
                $this->urlController = $this->slugController($this->urlArray[0]);
                // var_dump($this->urlController);
            } else {
                $this->urlController = $this->slugController(CONTROLLER);
            }

            if (isset($this->urlArray[1])) {
                $this->urlMethode = $this->slugMethode($this->urlArray[1]);
                // var_dump($this->urlMethod);
            } else {
                $this->urlMethode = $this->slugMethode(METHODE);
            }

            if (isset($this->urlArray[2])) {
                $this->urlParameter = $this->urlArray[2];
                // var_dump($this->urlParameter);
            } else {
                $this->urlParameter = '';
            }
        } else {
            $this->urlController = $this->slugController(CONTROLLER);
            var_dump($this->urlController);
            $this->urlMethode = $this->slugMethode(METHODE);
            $this->urlParameter = '';
        }
    }

    private function cleanUrl(): void
    {
        $this->url = strip_tags($this->url);
        $this->url = trim($this->url);
        $this->url = rtrim($this->url, "/");
    }

    private function slugController($urlSlugController): string
    {
        $this->urlSlugController = $urlSlugController;
        // Converter para minusculo
        $this->urlSlugController = strtolower($this->urlSlugController);
        // Converter '-' para ' '
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        // Converter a primeira letra de cada palavra para minuscula 
        $this->urlSlugController = ucwords($this->urlSlugController);
        // Cconverter ' ' para ''
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }

    private function slugMethode($urlSlugMethode): string
    {
        $this->urlSlugMethode = $this->slugController($urlSlugMethode);
        // Converter a primeira letra para minuscula
        $this->urlSlugMethode = lcfirst($this->urlSlugMethode);

        return $this->urlSlugMethode;
    }

    public function loadPage(): void
    {
        // require './app/str/Controllers/Home.php';
        // $home = new Home();
        // $home->index();

        // require './app/str/Controllers/Cart.php';
        // $cart = new Cart();
        // $cart->index();

        // Este trecho evita erros quando estamos em um servidor LINUX pois ele nao reconhece a troca de letra para minuscula
        // echo "Carregar a Página: {$this->urlController}<br>";
        $this->urlController = ucwords($this->urlController);
        // echo "Carregar a Página Corrigida: {$this->urlController}<br>";




        // $this->classLoad = "\\App\\str\\Controllers\\" . $this->urlController;

        // $classPage = new $this->classLoad();
        // $classPage->{$this->urlMethod}();


        $loadPage = new \Core\ConfigLoadPag();
        $loadPage->loadPage($this->urlController, $this->urlMethode, $this->urlParameter);
    }
}