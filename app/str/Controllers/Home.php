<?php 
    namespace App\str\Controllers;

class Home
{
    private array|string|null $data = []; 

    public function index(): void
    {
        $viewBanner = new \App\str\Models\StrHome();
        $viewBanner->viewHome();

        if ($viewBanner->getResult()) {
            $this->data['form'] = $viewBanner->getResultBd();
        } else {
            // var_dump($this->data);
        }

        $this->loadPage();
    }


    
    

    
    private function loadPage():void
    {
        $loadView = new \Core\ConfigView("str/Views/home/home", $this->data);
        $loadView->loadView();

    }

}


?>