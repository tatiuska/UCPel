<?php 
    class View {
        public function login($validacao=null) {
            if(!isset($validacao)) {
                echo '<div>
                        <h3>Login</h3>
                        <form action="index.php?acao=login" method="post">
                            Usuário: <input type="text" name="usuario"><br /><br />
                            Senha: <input type="text" name="password"><br /><br />
                            <input class="botao" type="reset" value="Limpar"> 
                            <input class="botao" type="submit" value="Logar">
                        </form>
                        </div>';
            } else {
                echo '<h3>' . $validacao . '</h3>';
            }
        }
    }
?>