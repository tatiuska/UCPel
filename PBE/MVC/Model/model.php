<?php 
    class Model {
        public function validaDados($usuario, $senha) {
            if($usuario == 'user' && $senha == 'pass') {
                return 'Login efetuado com sucesso!';
            } else {
                header('location:index.php?acao=falha');
            }
        }
    }
?>