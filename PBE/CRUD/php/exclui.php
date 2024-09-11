<?php 
    // chamando a conexão com o banco de dados
    require_once "dados_conexao.php";
    require_once "erros.php";

    //armazena o código a ser excluído
    $cod_livro = isset($_GET['cod_livro']) ? $_GET['cod_livro'] : null;

    // verificação se o código existe na tabela
    if(empty($cod_livro)) {
        echo "O código do livro informado não existe.";
        exit;
    }

    // exclui o registro da tabela livros
    $PDO = conecta_bd();
    
    $sql = "DELETE FROM `livros` WHERE cod_livro=:cod_livro";
    
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':cod_livro', $cod_livro, PDO::PARAM_INT);

    if($stmt->execute()) {
        header('Location: ../index.php');
    } else {
        echo "Houve um erro ao excluir o livro.";
        print_r($stmt->errorInfo());
    }
?>