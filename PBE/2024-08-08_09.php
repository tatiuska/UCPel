<!DOCTYPE html>
<html lang="pt-br">
<!-- Criar um formulário web e armazenar o nome de usuário em uma variável de sessão para um posterior uso -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Web (UA 03)</title>
</head>
<body>
    <?php 
        // Criando uma sessão para guardar o username
        session_start();

        // variável de sessão
        $_SESSION["username"] = $_POST["username"];
    ?>
    <!-- formulário para receber nome de usuário e senha -->
    <form name="form" method="post">
        <p>Digite seu nome de usuário e senha:</p>
        <input type="text" value="" placeholder="Nome de usuário" name="username"></br>
        <input type="text" value="" placeholder="Senha" name="password"></br>
        <input type="submit" value="Enviar">
    </form>
    <?php 
        // mensagem de boas-vindas personalizada
        echo "Seja bem-vindo, " . $_SESSION["username"] . "!" . " <input type='submit' value='Sair' method='post' name='logout'>";

        // if($_POST["logout"]) {
        //     session_destroy();
        // }
    ?>
</body>
</html>