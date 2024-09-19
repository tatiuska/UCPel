<?php 
    require_once 'Controller/controller.php';
    require_once 'Model/model.php';
    require_once 'View/view.php';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;

    if($acao == 'login') {
        $controller = new Controller();
        $controller->login();
    } else {
        if($acao == 'falha') {
            echo "Falha no login";
            $view = new View();
            $view->login();
        }
    }
?>
