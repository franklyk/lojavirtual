<?php 

namespace App\str\Controllers;

class AddProducts
{
    private array|string|null $data = [];

    private array|object|null $dataForm;
    private array|null $mensagem;

    public function index()
    {
        
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($this->dataForm["SendAddProduct"])){
            //Destroi a posiçao do botao submit
            unset($this->dataForm["SendAddProduct"]);


            $this->data = $this->dataForm;

            //Envia os dados do formulário para a StrAddProducts
            $createProducts = new \App\str\Models\StrAddProducts();
            $createProducts->create($this->data);

            //Recebe os dados que vêm da Models
            if($createProducts->getResult()){
                $this->mensagem = ['success' => 'success',
                'message' => 'sucesso',
                'redirect' => 'list-product/index'];
                header("Content-type : application/json; charset=UTF-8");
                echo json_encode($this->mensagem);

                return false;
                // $urlRedirect = URL . "add-products/index";
                // header("Location: $urlRedirect");
                var_dump($this->mensagem);
                
            }else{
                // Mantém os dados no formulário se não for redirecinado
                $this->data['form'] = $this->dataForm;
                $this->viewAddProduct();
            }
        }else{
            $this->viewAddProduct();
        }

    }
    private function viewAddProduct(){

        $loadView = new \Core\ConfigView("str/Views/products/addProducts", $this->data);
        $loadView->loadView();

    }

//     public function bootstrap() {
//         parent::bootstrap();
//         $this->addPlugin('Ajax');
//     }
    
//     public function bootstrap() {
//         parent::bootstrap();
//         $this->addPlugin('Ajax', ['bootstrap' => true]);
//     }
}

?>