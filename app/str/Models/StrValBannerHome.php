<?php

namespace App\str\Models;


/**
 * Editar a imagem do perfil do usuário
 *
 * @author Franklin
 */
class StrValBannerHome
{
    /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
    private bool $result = false;

    /** @var array|null $resultBD Recebe o valor retornado do banco de dados*/
    private array|null $resultBd;

    /** @var string $nameImg Recebe o SLUG/NOME da imagem */
    private string $nameImg;

    /** @var array|null $dataImage Recebe os dados da imagem */
    private array|null $dataImage;

    /** @var string $delImg Recebe o endereço da imagem que deve ser excluida */
    private string $delImg;

    /** @var string $directory Recebe o endereço de upload da imagem */
    private string $directory;

    private array|null $data;

    /**
     * @return bool Retorna true quando executar o processo com sucesso e false quando houver erro
     */
    function getResult(): bool
    {
        return $this->result;
    }

    function getResultBd(): array|null
    {
        return $this->resultBd;
    }

    public function viewBannerHome() //: bool
    {

        $viewBannerHome = new \App\str\Models\helper\StrRead();
        $viewBannerHome->fullRead("SELECT id, banner_background, banner_title, banner_text, banner_image FROM str_banners_home");

        $this->resultBd = $viewBannerHome->getResult();
        if ($this->resultBd) {
            $this->result = true;
            return true;
        } else {
            $_SESSION['msg'] = "<p class='alert-danger'>Erro 006: Dados do banner não encontrados!</p>";
            $this->result = false;
            return false;
        }
    }

    // public function update(array $data = null): void
    // {
    //     $this->data = $data;

    //     $this->dataImage = $this->data['new_image'];
    //     unset($this->data['new_image']);

    //     $valEmptyField = new \App\str\Models\helper\StrValEmptyField();
    //     $valEmptyField->valField($this->data);
    //     if ($valEmptyField->getResult()) {
    //         if (!empty($this->dataImage['name'])) {
    //             // $this->valInput();

    //         } else {
    //             $_SESSION['msg'] = "<p class='alert-danger'>Erro: Necessário selecionar uma imagem!</p>";
    //             $this->result = false;
    //         }
    //     } else {
    //         $this->result = false;
    //     }
    // }

    // private function valInput(): void
    // {
    //     $valExtImg = new \App\str\Models\helper\StrValExtImage();
    //     $valExtImg->validateExtImg($this->dataImage['type']);
    //     /*if (($this->viewProfile()) and ($valExtImg->getResult())) {
    //         $this->upload();
    //     } else {
    //         $this->result = false;
    //     }*/
    // }

    // private function edit(): void
    // {
    //     $this->data['image'] = $this->nameImg;
    //     $this->data['modified'] = date("Y-m-d H:i:s");

    //     $this->result = false;
    //     $upUser = new \App\str\Models\helper\StrUpdate();
    //     $upUser->exeUpdate("adms_users", $this->data, "WHERE id=:id", "id=" . $_SESSION['user_id']);

    //     if ($upUser->getResult()) {
    //         $_SESSION['user_image'] = $this->nameImg;
    //         $this->deleteImage();
    //     } else {
    //         $_SESSION['msg'] = "<p class='alert-danger'>Erro: Imagem não editado com sucesso!</p>";
    //         $this->result = false;
    //     }
    // }

    // private function deleteImage(): void
    // {
    //     if (((!empty($this->resultBd[0]['image'])) or ($this->resultBd[0]['image'] != null)) and ($this->resultBd[0]['image'] != $this->nameImg)) {
    //         $this->delImg = "app/adms/assets/images/users/" . $this->data['id'] . "/" . $this->resultBd[0]['image'];

    //         if (file_exists($this->delImg)) {
    //             unlink($this->delImg);
    //         }
    //     }
    //     $_SESSION['msg'] = "<p class='alert-success'>Imagem editada com sucesso!</p>";
    //     $this->result = true;
    // }
    // private function upload(): void
    // {

    //     $slugImg = new \App\str\Models\helper\StrSlug();
    //     $this->nameImg = $slugImg->slug($this->dataImage['name']);

    //     $this->directory = "app/adms/assets/images/users/" . $_SESSION['user_id'] . "/";

    //     $uploadImgRes = new \App\str\Models\helper\StrUploadImgRes();
    //     $uploadImgRes->upload($this->dataImage, $this->directory, $this->nameImg, 300, 300);

    //     if ($uploadImgRes->getResult()) {
    //         $this->edit();
    //     } else {
    //         $this->result = false;
    //     }
    // }

}
