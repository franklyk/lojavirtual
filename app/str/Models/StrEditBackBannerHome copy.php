<?php

namespace App\str\Models;



/**
 * Editar a imagem do perfil do usuário
 *
 * @author Franklin
 */
class StrEditBackBannerHome
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

    public function viewBanner()
    {

        /*$viewBanner = new \App\str\Models\helper\StrRead();
        $viewBanner->fullRead("SELECT id, banner_background FROM str_banners_home");        

        
        $this->resultBd = $viewBanner->getResult();
        if ($this->resultBd) {
            $this->result = true;
            return true;
        } else {
            $_SESSION['msg'] = "<p class='alert-danger'>Erro 006: Banner não encontrado!</p>";
            $this->result = false;
            return false;

        }*/
    }

    public function update(array $data = null):void
    {
        $this->data = $data;
        // var_dump($this->data);

        $this->dataImage = $this->data['banner_background'];
        // var_dump($this->dataImage);
        unset($this->data['banner_background']);

        $valEmptyField = new \App\str\Models\helper\StrValEmptyField();
        $valEmptyField->valField($this->data);
        if ($valEmptyField->getResult()) {
            if(!empty($this->dataImage['name'])){
                $this->valInput();
            
            }else{
            $_SESSION['msg'] = "<p class='alert-danger'>Erro: Necessário selecionar uma imagem!</p>";
            $this->result = false;
            }
            
        } else {
            $this->result = false;
        }
    }
  
    private function valInput(): void
    {
        $valExtImg = new \App\str\Models\helper\StrValExtImage();

        $valExtImg->validateExtImg($this->dataImage['type']);
        if(($this->viewBanner()) and ($valExtImg->getResult())){
            $this->upload();

        }else{
            $this->result = false;

        }
    }

    private function edit(): void
    {
        $this->data['banner_background'] = $this->nameImg;
        $this->data['modified'] = date("Y-m-d H:i:s");

        $this->result = false;
        $upBanner = new \App\str\Models\helper\StrUpdate();
        $upBanner->exeUpdate("str_banners_home", $this->data, "WHERE id=:id", "id=" . $this->resultBd['id']);

        if($upBanner->getResult()){
            $this->deleteImage(); 
        }else{
            $_SESSION['msg'] = "<p class='alert-danger'>Erro: Imagem não editada com sucesso!</p>";
            $this->result = false;
        }
    }

    private function deleteImage(): void
    {
        if(((!empty($this->resultBd[0]['banner_background'])) or ($this->resultBd[0]['banner_background'] != null)) and ($this->resultBd[0]['banner_background'] != $this->nameImg)){
            $this->delImg = "app/adms/assets/images/banners/" .$this->resultBd[0]['banner_background'];
    
            if(file_exists($this->delImg)){
                unlink($this->delImg);
            }
        }
        $_SESSION['msg'] = "<p class='alert-success'>Imagem editada com sucesso!</p>";
        $this->result = true;
    }
    private function upload(): void
    {

        $slugImg = new \App\str\Models\helper\StrSlug();
        $this->nameImg = $slugImg->slug($this->dataImage['name']);
        
        $this->directory = "app/adms/assets/images/banners/";

        $uploadImgRes = new \App\str\Models\helper\StrUploadImgRes();
        $uploadImgRes->upload($this->dataImage, $this->directory, $this->nameImg, 300, 300);

        if($uploadImgRes->getResult()){
            $this->edit();
        }else{
            $this->result = false;
        }
    }
}