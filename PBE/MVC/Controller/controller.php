<?php 
    require_once './Model/model.php';

    class Controller {
        public function login() {
            $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
            $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

            $model = new Model();
            $validacao = $model->validaDados($usuario, $senha);

            $view = new View();
            $view->login($validacao);
        }
    }
?>