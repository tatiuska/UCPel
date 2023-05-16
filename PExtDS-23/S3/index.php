<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h1>Dados do Aluno:</h1>
    <?php 
        //nome, cpf, data de nascimento, número de matrícula, semestre de ingresso, curso
        $nome[30] = "Tatiana W.";
        $cpf = 50273313800;
        $d_nasc[10] = "04/04/1980";
        $matr = 7651282022;
        $s_ingresso[10] = "01/2023";
        $curso[50] = "Análise e Desenvolvimento de Sistemas";

        echo "<p><b>Nome:</b> $nome</p>
            <p><b>CPF:</b> $cpf</p>
            <p><b>Data de Nascimento:</b> $d_nasc</p>
            <p><b>Número de Matrícula:</b> $matr</p>
            <p><b>Semestre de Ingresso:</b> $s_ingresso</p>
            <p><b>Curso:</b> $curso</p>";
    ?>
</body>
</html>