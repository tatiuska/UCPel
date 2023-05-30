<!-- Formulário para Cadastramento de alunos - processamento e dados de saída -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <!-- Link para carregamento do style.css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>Resultado do Cadastro</h1>
    </header>
    <main>
        <?php 
            //Uso do método GET para coletar as informações inseridas pelo usuário
            $nome = $_GET["nome"] ?? "não informado"; //obs: criar tratamento de erros com JS
            $cpf = $_GET["cpf"] ?? "não informado";
            $d_nasc = $_GET["d_nasc"] ?? "não informado";
            $matr = $_GET["matr"] ?? "não informado";
            $s_ingresso = $_GET["s_ingresso"] ?? "não informado";
            $curso = $_GET["curso"] ?? "não informado";

            echo "<p><b>Nome:</b> $nome<br>
                <b>CPF:</b> $cpf<br>
                <b>Data de Nascimento:</b> $d_nasc<br>
                <b>Número de Matrícula:</b> $matr<br>
                <b>Semestre de Ingresso:</b> $s_ingresso<br>
                <b>Curso:</b> $curso</p>";
        ?>
        <!-- Uso do JavaScript para retornar para a página anterior -->
        <p><a href="javascript:history.go(-1)"><< Voltar</a></p>
    </main>
</body>
</html>