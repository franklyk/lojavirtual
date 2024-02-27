<?php

namespace Core;

class ConfigLoadPag
{
    /** @var string $urlController Recebe da URL o nome da controller */
    private string $urlController;
    /** @var string $urlMetodo Recebe da URL o nome do método */
    private string $urlMethode;
    /** @var string $urlParamentro Recebe da URL o parâmetro */
    private string $urlParameter;
    /** @var string $classLoad Controller que deve ser carregada */
    private string|array|null $classLoad;
    /** @var string $urlSlugController Recebe o controller tratado */
    public string $urlSlugController;
    /** @var string $urlSlugMetodo Recebe o método tratado */
    public string $urlSlugMetodo;
    /** @var array $listPgPublic Carrega um array com as páginas que são publicas*/
    private array $listPgPublic;
    /** @var array $listPgPublic Carrega um array com as páginas que são privadas*/
    private array $listPgPrivate;

    public function loadPage(string|null $urlController, string|null $urlMethode, string|null $urlParameter = null): void
    {
        $this->urlController = $urlController;
        $this->urlMethode = $urlMethode;
        $this->urlParameter = $urlParameter;

        $this->pagePublic();
        if (class_exists($this->classLoad)) {
            $this->loadMethode();
            // var_dump($this->classLoad);
        } else {
            die("Erro - 003: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
        }
    }

    private function loadMethode(): void
    {
        $classLoad = new $this->classLoad();

        if (method_exists($classLoad, ($this->slugMetode($this->urlMethode)))) {
            $classLoad->{$this->slugMetode($this->urlMethode)}($this->urlParameter);
        } else {
            die("Erro - 004: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
        }
    }

    private function pagePublic(): void
    {
        $this->listPgPublic = ["Home", "Login", "Erro", "ValBannerHome", "EditBannerHome", "EditBackgroundBanner"];

        if(in_array($this->urlController, $this->listPgPublic)){
            $this->classLoad = "\\App\\str\\Controllers\\" . $this->slugController($this->urlController);
        }else{
            $this->pagePrivate();
        }
    }

    private function pagePrivate():void
    {
        $this->listPgPrivate = ["Dashboard", "Cart", "AddProducts", "Logout"];

        if(in_array($this->urlController, $this->listPgPrivate)){
            $this->verifyLogin();
        }else{
            $_SESSION['msg'] = "<p class='alert-danger';'>Página não encontrada!</p><br>";

            $urlRedirect = URL . "login/index";
            header("Location: $urlRedirect");
        }
    }

    private function verifyLogin() :void
    {
        if((isset($_SESSION['user_id'])) and (isset($_SESSION['user_name']) and (isset($_SESSION['user_email'])))){
            $this->classLoad = "\\App\\str\\Controllers\\" . $this->urlController;
        }else{
            $_SESSION['msg'] = "<p style='color:#f00;'>Necessário realizar o login para acessar esta página!</p><br>";

            $urlRedirect = URL . "login/index";
            header("Location: $urlRedirect");
        }
    }

    private function slugController(string $slugController): string
    {
        $this->urlSlugController = $slugController;
        // Converter para minusculo
        $this->urlSlugController = strtolower($this->urlSlugController);
        // Converter o traco para espaco em braco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        // Converter a primeira letra de cada palavra para maiusculo
        $this->urlSlugController = ucwords($this->urlSlugController);
        // Retirar espaco em branco        
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        //var_dump($this->urlSlugController);
        return $this->urlSlugController;
    }
    private function slugMetode(string $urlSlugMethode): string
    {
        $this->urlMethode = $this->slugController($urlSlugMethode);
        //Converter para minusculo a primeira letra
        $this->urlMethode = lcfirst($this->urlMethode);
        //var_dump($this->urlSlugMetodo);
        return $this->urlMethode;
    }
}
