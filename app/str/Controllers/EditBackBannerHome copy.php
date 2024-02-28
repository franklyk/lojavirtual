<?php

namespace App\str\Controllers;

/**
 * Controller da página editar imagem do perfil
 * 
 * @author Franklin (" KLYK ") <frsbatist@gmail.com>
 */
class EditBackBannerHome
{
    /** @var array|string|null $data Recebe os dados que serão enviados para a VIEW */
    private array|string|null $data = [];

    /** @var array $dataform Recebe os dados do Formulário */
    private array|null $dataForm;

    /**
     * Instanciar a classe responsável em carregar a View e enviar os dados para a View
     *
     * @return void
     */
    public function index(): void
    {
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        $loadView = new \Core\ConfigView("str/Views/home/editBackBannerHome", $this->data);
        $loadView->loadView();

        /*
        // var_dump($this->dataForm);
        if (!empty($this->dataForm['SendEditBackBanner'])) {
            // $this->editBackBanner();
        } else {

            $viewBanner = new \App\str\Models\StrEditBackBannerHome();
            $viewBanner->viewBanner();
            if ($viewBanner->getResult()) {
                $this->data['form'] = $viewBanner->getResultBd();
                $this->viewEditBackBanner();
            } else {
                $urlRedirect = URL . "val-banner-home/index";
                header("Location: $urlRedirect");
            }
        }
    }
    private function viewEditBackBanner(): void
    {

        // $button = [
        //         'view_profile' => ['menu_controller' => 'view-profile', 'menu_metodo' => 'index']];
    
        //         $listButton = new \App\adms\Models\helper\AdmsButton();
        //         $this->data['button'] = $listButton->buttonPermission($button);

        //         $countUsers = new \App\adms\Models\helper\AdmsMenu();
        //         $this->data['menu'] = $countUsers->itemMenu();
    
        //         $this->data['sidebarActive'] = "list-users";



        $loadView = new \Core\ConfigView("str/Views/home/editBackBannerHome", $this->data);
        $loadView->loadView();
    }


    private function editBackBanner(): void
    {
        
        if (!empty($this->dataForm['SendEditProfImage'])) {
            unset($this->dataForm['SendEditProfImage']);

            $this->dataForm['banner_background'] = $_FILES['banner_background'] ? $_FILES['banner_background'] : null;

            $editBackBunner = new \App\str\Models\StrEditBackBannerHome();
            $editBackBunner->update($this->dataForm);

            if ($editBackBunner->getResult()) {
                $urlRedirect = URL . "val-banner-home/index";
                header("Location: $urlRedirect");
            } else {
                $this->data['form'] = $this->dataForm;
                $this->viewEditBackBanner();
            }
        } else {
            $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Banner não encontrado!</p><br>";
            $urlRedirect = URL . "edit-back-banner-home/index";
            header("Location: $urlRedirect");
        }*/
    }
}
