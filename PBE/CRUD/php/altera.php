<?php 
    // chamando o banco de dados
    require_once "dados_conexao.php";
    require_once "erros.php";

    // coletando as informações postadas no formulário form_altera.php
    $cod_livro = isset($_POST['cod_livro']) ? $_POST['cod_livro'] : null;
    $titulo_livro = isset($_POST['titulo_livro']) ? $_POST['titulo_livro'] : null;
    $cod_isbn = isset($_POST['cod_isbn']) ? $_POST['cod_isbn'] : null;
    $autor_livro = isset($_POST['autor_livro']) ? $_POST['autor_livro'] : null;
    $nome_editora = isset($_POST['nome_editora']) ? $_POST['nome_editora'] : null;
    $qtd_paginas = isset($_POST['qtd_paginas']) ? $_POST['qtd_paginas'] : null;

    // verificação dos campos dos formulários, se estão preenchidos
    if(empty($titulo_livro) || empty($cod_isbn) || empty($autor_livro) || empty($nome_editora) || empty($qtd_paginas)) {
        echo "É necessário o preenchimento de todos os campos do formulário de cadastro!";
        exit;
    }

    // altera as informações na tabela livros do banco de dados UA9
    $PDO = conecta_bd();

    $stmt = $PDO->prepare("UPDATE `livros` SET titulo_livro=:titulo_livro, cod_isbn=:cod_isbn, autor_livro=:autor_livro, nome_editora=:nome_editora, qtd_paginas=:qtd_paginas WHERE cod_livro=:cod_livro");

    $stmt->bindParam(':cod_livro', $cod_livro, PDO::PARAM_INT);
    $stmt->bindParam(':titulo_livro', $titulo_livro);
    $stmt->bindParam(':cod_isbn', $cod_isbn);
    $stmt->bindParam(':autor_livro', $autor_livro);
    $stmt->bindParam(':nome_editora', $nome_editora);
    $stmt->bindParam(':qtd_paginas', $qtd_paginas);

    if($stmt->execute()) {
        header('Location: ../index.php');
    } else {
        echo "Houve um erro na alteração do livro.";
        print_r($stmt->errorInfo());
    }
?>