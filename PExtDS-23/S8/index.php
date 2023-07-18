<!-- Tarefa Semana 8 PExt -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para Cadastro de Alunos</title>
    <!-- Link para carregamento do style.css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Link para o script.js -->
    <script type="text/javascript" src="./js/script.js" defer></script>
</head>
<body>
    <?php
        // Incluindo o script para cadastro com o Banco de dados 
        include "./php/conexao.php";

        // Capturando os dados do formulário retroalimentado
        $nome = $_POST['nome'] ?? "Não informado"; // Uso do operador de coalescência nula caso o usuário não preencha nada
        $cpf = $_POST['cpf'] ?? "Não informado";
        $d_nasc = $_POST['d_nasc'] ?? "Não informado";
        $tel = $_POST['tel'] ?? "Não informado"; // Inserção de mais dois campos no formulário (literal caractere) - telefone
        $matr = $_POST['matr'] ?? "Não informado";
        $s_ingresso = $_POST['s_ingresso'] ?? "Não informado";
        $curso = $_POST['curso'] ?? "Não informado";
        $formando = $_POST['formando'] ?? "Não informado"; // Inserção de novo campo no formulário (numérico lógico) - formando
    ?>
    <header>
        <img src="./image/img01.svg" alt="Faça seu cadastro preenchendo o formulário abaixo." width="400px" height="300px">
        <h1>UniFic: Cadastro de Aluno</h1>
    </header>
    <main>
        <!-- Div para o Formulário -->
        <div id="formulario">
            <!-- Início do Formulário: Nessa versão optamos pelo uso do método POST -->
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> <!-- Uso de PHP short tag para aplicar a variável PHP_SELF -->
                <p>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="idNome" value="<?=$nome?>"><!-- Uso de PHP short tag para manter os dados inseridos pelo usuário no formulário após o envio -->
                </p>
                <p>
                    <label for="cpf">CPF: </label>
                    <input type="text" name="cpf" id="idCpf" value="<?=$cpf?>">
                </p>
                <p>
                    <label for="d_nasc">Data de Nascimento: </label>
                    <input type="date" name="d_nasc" id="idNasc" value="<?=$d_nasc?>">
                </p>
                <p>
                    <label for="tel">Telefone: </label>
                    <input type="text" name="tel" id="idTel" value="<?=$tel?>">
                </p>
                <p>
                    <label for="matr">Matrícula: </label>
                    <input type="text" name="matr" id="idMatr" value="<?=$matr?>">
                </p>
                <p>
                    <label for="s_ingresso">Semestre de Ingresso: </label>
                    <input type="text" name="s_ingresso" id="idSIngresso" value="<?=$s_ingresso?>">
                </p>
                <p>
                    <label for="curso">Curso: </label>
                    <input type="text" name="curso" id="idCurso" value="<?=$curso?>">
                </p>
                <p>
                    <!-- Alteração no formulário para campo booleano do BD, utlizando a tag select ao invés de input -->
                    <label for="formando">Está no último semestre do curso?</label>
                    <select name="formando" id="idFormando" value="<?=$formando?>">
                        <option value="S">Sim</option>
                        <option value="N">Não</option>
                    </select>
                </p>
                <p>
                    <!-- Botão para enviar as informações -->
                    <input type="submit" value="Enviar">
                </p>
            </form>
            <!-- Fim do Formulário -->
        </div>
        <!-- Div para mostrar os dados enviados pelo usuário -->
        <div id="resultado">
            <img id="cadastro-confirmado" src="./image/img02.svg" alt="Cadastro confirmado!" width="110px" height="110px">
            <section id="resultado-cadastro">
                <h2>Cadastro realizado!</h2>
                <?php 
                    // Exibindo os dados informados pelo usuário
                    echo "<b>Nome:</b> $nome<br>
                    <b>CPF:</b> $cpf<br>
                    <b>Data de Nascimento:</b> $d_nasc<br>
                    <b>Telefone:</b> $tel<br>
                    <b>Número de Matrícula:</b> $matr<br>
                    <b>Semestre de Ingresso:</b> $s_ingresso<br>
                    <b>Curso:</b> $curso<br>
                    <b>Formando?</b> $formando</p>";
                ?>
            </section>
        </div>
    </main>
    <!-- Final da página -->
    <footer id="final-pagina">
        <p>2023 - UniFic - Desenvolvido por Tatiana Weska</p>
    </footer>
</body>
</html>