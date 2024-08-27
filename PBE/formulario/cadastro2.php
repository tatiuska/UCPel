<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php 
        // Verificação e recebimento dos dados do formulário através do método post
        if($_POST['enviar'] == 'Enviar') {
            foreach($_POST as $key => $value) {
                if($key <> 'locomocao')
                    echo "$key: $value<br>";
            }

            foreach($_POST['locomocao'] as $key => $value) {
                echo "Locomoção: $value<br>";
            }
        }
        

    ?>
    <!-- Formulário de Cadastro - UA 06 -->
    <form name="cadastro" method="post" action="cadastro2.php">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" size="20"></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input type="date" name="dataNascimento"></td>
            </tr>
            <tr>
                <td><label>Endereço:</label></td>
                <td><textarea name="endereco" rows="3" cols="22"></textarea></td>
            </tr>
            <tr>
                <td><label>Estado civil:</label></td>
                <td><select name="estadoCivil">
                    <option value="S">Solteiro</option>
                    <option value="C">Casado</option>
                </select></td>
            </tr>
            <tr>
                <td><label>Sexo:</label></td>
                <td>Masculino: <input type="radio" name="sexo" value="M"></td>
                <td>Feminino: <input type="radio" name="sexo" value="F"></td>
            </tr>
            <tr>
                <td><label>Meio de locomoção:</label></td>
                <td>
                    <input type="checkbox" name="locomocao[]" value="M"> Moto
                    <input type="checkbox" name="locomocao[]" value="C"> Coletivo
                    <input type="checkbox" name="locomocao[]" value="B"> Bicicleta
                </td>
            </tr>
            <tr>
                <td><label>Senha:</label></td>
                <td><input type="password" name="senha" size="20"></td>
            </tr>
            <tr>
                <td><label>Confirma senha:</label></td>
                <td><input type="password" name="confirmaSenha" size="20"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Enviar">
                    <input type="reset" name="limpar" value="Limpar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>