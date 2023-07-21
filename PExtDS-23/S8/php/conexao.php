<?php 
    // Código para a conexão com o banco de dados usando PDO

    $server = "localhost";
    $user = "admin";
    $password = "9*uPal2SrYIQ9M74";

    // Início do PDO
    try {
        $conexao = new PDO("mysql:host=$server;dbname=alunos_cad", $user, $password);
        // Configurar o modo de erro do PDO
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão realizada com sucesso!";
    } catch(PDOException $e) {
        echo "Erro de conexão! " . $e->getMessage();
    }
    
    // Função para mostrar a mensagem de "Cadastrado com sucesso" mais apresentável.
    // Parâmetro $texto = a mensagem que vai aparecer para o usuário.
    // Parâmetro $tipo, a classe específica para a mensagem ser exibida em verde ou em vermelho.
    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }

    // Função para modificar a exibição da data de nascimento (para dia/mês/ano).
    function mostra_data($data){
        $d = explode('-', $data);
        $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
        return $escreve; 
    }
?>