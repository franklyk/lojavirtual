<?php

namespace App\str\Models;

class StrHome
{
    /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
    private bool $result = false;

    /** @var array|null $resultBD Recebe os valores retornados do banco de dados*/
    private array|null $resultBd;

    /** @var array|string|null $id Recebe o id do registro */
    private int|string|null $id;

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

    public function viewHome(): void
    {

        // $this->id = $id;

        $viewProduct = new \App\str\Models\helper\StrRead();
        $viewProduct->fullRead("SELECT id, banner_background, banner_title, banner_text, banner_image 
                                FROM str_banners_home
                                LIMIT :limit", "limit=1");

        $this->resultBd = $viewProduct->getResult();
        // var_dump($this->resultBd);

        if ($this->resultBd) {
            $this->result = true;
        } else {
            $_SESSION['msg'] = "<p>Produto não encontrado!</p>";
            $this->result = false;
        }
    }
}
