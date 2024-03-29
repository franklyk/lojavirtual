<?php

namespace App\str\Controllers;

/**
 * Controller da página editar imagem do perfil
 * 
 * @author Franklin (" KLYK ") <frsbatist@gmail.com>
 */
class ValBannerHome
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

        $viewBanner = new \App\str\Models\StrValBannerHome();
        $viewBanner->viewBannerHome();

        if ($viewBanner->getResult()) {
            $this->data = $viewBanner->getResultBd();
        } else {
            // var_dump($this->data);
        }

        $this->viewBannerHome();





        if (!empty($this->dataForm['SendEditProfImage'])) {
            $this->editProfileImage();
        } else {
            /*
            $viewProfImg = new \App\adms\Models\AdmsEditProfileImage();
            $viewProfImg->viewProfile();
            if ($viewProfImg->getResult()) {
                $this->data['form'] = $viewProfImg->getResultBd();
                $this->viewEditProfImg();
            } else {
                $urlRedirect = URL . "login/index";
                header("Location: $urlRedirect");
            }
            */
        }
    }
    private function viewEditProfImg(): void
    {

        /*
            $button = [
                'view_profile' => ['menu_controller' => 'view-profile', 'menu_metodo' => 'index']];
    
                $listButton = new \App\adms\Models\helper\AdmsButton();
                $this->data['button'] = $listButton->buttonPermission($button);

                $countUsers = new \App\adms\Models\helper\AdmsMenu();
                $this->data['menu'] = $countUsers->itemMenu();
    
                $this->data['sidebarActive'] = "list-users";
    
    

            $loadView = new \Core\ConfigView("adms/Views/users/editProfileImage", $this->data);
            $loadView->loadView();
            */
    }


    private function editProfileImage(): void
    {
        /*

            if(!empty($this->dataForm['SendEditProfImage'])){
                unset($this->dataForm['SendEditProfImage']);
                
                $this->dataForm['new_image'] = $_FILES['new_image'] ? $_FILES['new_image'] : null ;

                $editProfImg = new \App\adms\Models\AdmsEditProfileImage();
                $editProfImg->update($this->dataForm);

                if($editProfImg->getResult()){
                    $urlRedirect = URL . "view-profile/index";
                    header("Location: $urlRedirect");
                }else{
                    $this->data['form'] = $this->dataForm;
                    $this->viewEditProfImg();
                }
            } else{
                $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Usuário não encontrado!</p><br>";
                $urlRedirect = URL . "login/index";
                header("Location: $urlRedirect");
            }*/
    }

    private function viewBannerHome(): void
    {

        $loadView = new \Core\ConfigView("str/Views/home/valBannerHome", $this->data);
        $loadView->loadView();
    }
}
