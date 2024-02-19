
<?php


    session_start();
    ob_start();
    date_default_timezone_set("America/Sao_Paulo"); 

    // define('KLKSK8', true);
    // require './vendor/autoload.php';
    // $home = new Core\ConfigController();
    // $home->loadPage();

    require './core/ConfigController.php';
    $home = new ConfigController();
    $home->loadPage();

?>
