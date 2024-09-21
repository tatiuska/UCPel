<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $enviar = isset($_POST['Enviar']) ? $_POST['Enviar'] : null;
        if($enviar == 'Enviar') {
            define("DSN", "mysql");
            define("SERVIDOR", "localhost");
            define("USUARIO", "root");
            define("SENHA", null);
            define("BANCODEDADOS", "ua11");
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            try {
                $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);
            } catch(PDOException $e) {
                echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
            }

            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmt->execute();

            if($stmt->rowCount()) {
                $reg = $stmt->fetch();
                session_start();
                $_SESSION['usuario'] = $reg["nome"];
                $_SESSION['email'] = $reg["email"];
                header('location: principal.php');
            } else {
                session_start();
                $_SESSION = array();
                echo "Autenticação incorreta!";
            }
        }
    ?>

    <form action="index.php" name="login" method="post">
        <table>
            <tr>
                <td><label>E-mail:</label></td>
                <td><input type="text" name="email" size="20"></td>
            </tr>
            <tr>
                <td><label>Senha:</label></td>
                <td><input type="password" name="senha" size="20"></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
        </table>
    </form>

</body>
</html>
