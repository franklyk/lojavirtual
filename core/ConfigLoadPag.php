<?php

namespace Core;

class ConfigLoadPag
{


    private string $urlController;
    private string $urlMethode;
    private string $urlParameter;
    private string $classLoad;
    private string $urlSlugController;
    private string $urlSlugMetode;

    public function loadPage(string|null $urlController, string|null $urlMethode, string|null $urlParameter = null): void
    {
        $this->urlController = $urlController;
        $this->urlMethode = $urlMethode;
        $this->urlParameter = $urlParameter;

        $this->classLoad = "\\App\\str\\Controllers\\" . $this->slugController($this->urlController);
        if (class_exists($this->classLoad)) {
            $this->loadMethode();
            var_dump($this->classLoad);
        } else {
            die("Erro - 003: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
        }
    }

    private function loadMethode(): void
    {
        $classLoad = new $this->classLoad();
        if (method_exists($classLoad, ($this->urlMethode))) {
            $classLoad->{$this->urlMethode}($this->urlParameter);
        } else {
            die("Erro - 004: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
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
    private function slugMetode(string $urlSlugMetode): string
    {
        $this->urlSlugMetode = $this->slugController($urlSlugMetode);
        //Converter para minusculo a primeira letra
        $this->urlSlugMetode = lcfirst($this->urlSlugMetode);
        //var_dump($this->urlSlugMetodo);
        return $this->urlSlugMetode;
    }
}
