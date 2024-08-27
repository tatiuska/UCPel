<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <?php 
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $idade = isset($_POST['idade']) ? $_POST['idade'] : null;
        $salario = isset($_POST['salario']) ? $_POST['salario'] : null;
        $enviar = isset($_POST['enviar']) ? $_POST['enviar'] : null;

        if($enviar == 'Enviar') {
            $erro = null;

            // exibiçao dos dados
            echo "Dados: <br />";

            foreach($_POST as $chave => $valor) {
                if($chave <> 'enviar') {
                    echo "$chave: $valor <br />";
                }
            }
            echo "<br /><hr>";
            
            // validação do e-mail
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro = $erro . "e-mail inválido <br />";
            }

            // validação de idade
            if(!filter_var($idade, FILTER_VALIDATE_INT)) {
                $erro = $erro . "idade inválida <br />";
            }

            // validação do salário
            if(!filter_var($salario, FILTER_VALIDATE_FLOAT)) {
                $erro = $erro . "salário inválido <br />";
            }

            // verificação do estado geral dos erros
            if($erro <> null) {
                echo "Erro(s): <br /> $erro<br /><hr>";
            } else {
                echo "Tudo certo com os dados! <br /><br /><hr>";
            }
        }
    ?>
    <form name="cadastro" method="post" action="napratica.php">
        <table>
            <tr><td colspan="2"><label>Formulário:</label></td></tr>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" value="<?=$nome?>"></td>
            </tr>
            <tr>
                <td><label>E-mail:</label></td>
                <td><input type="text" name="email" value="<?=$email?>"></td>
            </tr>
            <tr>
                <td><label>Idade:</label></td>
                <td><input type="text" name="idade" value="<?=$idade?>"></td>
            </tr>
            <tr>
                <td><label>Salário:</label></td>
                <td><input type="text" name="salario" value="<?=$salario?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>