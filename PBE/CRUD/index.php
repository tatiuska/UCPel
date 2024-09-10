<?php 
    // Conexão com o banco de dados ua9
    require_once "dados_conexao.php";
    require_once "erros.php";
    $PDO = conecta_bd();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <!-- link para carregamento dos estilos da página -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Cadastro de Livros</h1>
    <p><a href="form_inclui.php">Adicionar Livro</a></p>
</body>
</html>

