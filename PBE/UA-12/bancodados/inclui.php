<?php 
    require_once "inicia.php";

    // coleta as informações do formulário em form_inclui.php
    $nome_func = isset($_POST['nome_func']) ? $_POST['nome_func'] : null;
    $foto_func_endereco = isset($_POST['foto_func_endereco']) ? $_POST['foto_func_endereco'] : null;

    // variáveis que guardam o conteúdo da superglobal $_FILES
    $nome = $_FILES['foto_func_endereco']['name'];
    $temp = $_FILES['foto_func_endereco']['name'];

    // subpasta onde será feito o upload - não funcionou
    $upload_dir = 'upload/';

    // guarda o nome do arquivo com seu endereço
    $upload_file = $upload_dir . $nome;

    // não exibe mensagem alguma
    if(move_uploaded_file($temp, $upload_file)) {
        echo "Upload efetuado com sucesso!";
    } else {
        echo "Erro! Houve uma falha no processo de upload do arquivo!";
    }

    // insere as informações na tabela funcionário do banco de dados
    $PDO = conecta_bd();
    
    $sql = "INSERT INTO `funcionario` (nome_func, foto_func_endereco) VALUES (:nome_func, :upload_file)";

    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':nome_func', $nome_func);
    $stmt->bindParam(':upload_file', $upload_file);

    if($stmt->execute()) {
        header('Location: form_inclui.php');
    } else {
        echo "Houve um erro na inclusão do registro.";
        print_r($stmt->errorInfo());
    }

?>