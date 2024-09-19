<?php 
    // chama a classe que faz a conexao
    require_once "conexao.php";

    // faz a chamada da classe Conexao com Singleton
    $conecta = Conexao::getInstance();
    // var_dump(isset($conn));

    // lê a tabela Alunos e mostra o primeiro registro da tabela
    // $conecta "expected type object. found bool." - não funcionou
    $stmt = $conecta->query('SELECT * FROM `alunos`');
    $registro = $stmt->fetch();
    echo $registro['nome_aluno'];
?>