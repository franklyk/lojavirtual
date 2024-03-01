<?php 
    namespace App\str\Controllers;

class Home
{
    private string|null $data = null;

    public function index():void
    {
        
        $this->loadPage();
    }
    private function loadPage():void
    {
        $loadView = new \Core\ConfigView("str/Views/home/home", $this->data);
        $loadView->loadView();

    }
}

?>