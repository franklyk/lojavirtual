<?php
    namespace App\str\Models;
    
    
    class StrEditProductImage
    {

        /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
        private bool $result = false;

        /** @var array|null $resultBD Recebe o valor retornado do banco de dados*/
        private array|null $resultBd;

            /** @var array|null $data Recebe as informações do formulário */
        private array|null $data;
        
        /** @var array|null $dataImage Recebe os dados da imagem */
        private array|null $dataImage;

        /** @var string $nameImg Recebe o SLUG/NOME da imagem */
        private string $nameImg;

        /** @var string $directory Recebe o endereço de upload da imagem */
        private string $directory;
        /**
         * @return bool Retorna true quando executar o processo com sucesso e false quando houver erro
         */
        function getResult(): bool
        {
            return $this->result;
        }

        /**
         * Undocumented function
         *
         * @return array|null
         */
        function getResultBd(): array|null
        {
            return $this->resultBd;
        }
    
        public function uploadImage($data): void
        {
            $this->data = $data;
    
            $this->dataImage = $this->data['product_image'];

            $this->valExtImg();
        }

        private function valExtImg(): void
        {
            $valExtImg = new \App\str\Models\helper\StrValExtImage();
            $valExtImg->validateExtImg($this->dataImage['type']);

            if($valExtImg->getResult()){
                $this->upload();

            }else{
                $this->result = false;
            }
        }
        private function upload(): void
        {

            $this->data['created'] = date("Y-m-d H:i:s");

            $slugImg = new \App\str\Models\helper\StrSlug();
            $this->nameImg = $slugImg->slug($this->dataImage['name']);
            
            $this->directory = "app/str/assets/images/products/";

            $uploadImgRes = new \App\str\Models\helper\StrUploadImgRes();
            $uploadImgRes->upload($this->dataImage, $this->directory, $this->nameImg, 500, 300);

            $this->data['product_image'] = $this->nameImg;

            if($uploadImgRes->getResult()){
                $createImage = new \App\str\Models\helper\StrCreate();
                $createImage->exeCreate("str_products", $this->data);
                if($createImage->getResult()){

                    $_SESSION['msg'] = "<p'>Cadastrado com sucesso!</p>";
                    $this->result = true;
                }else{
                    $_SESSION['msg'] = "<p'>Falha ao cadastrar!</p>";
                    $this->result = false;
                }
            }else{
                $this->result = false;
            }
        }
    }

?>
