<!-- Cadastro Aluno IMDAZ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ - Criar cadastro: aluno</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS do Projeto -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous" defer></script>
</head>
<body>
    <?php
        // Inserir códigos da classe Pessoa e da Classe Aluno
        // include "pessoa.php";
        //include "aluno.php";

        // Capturando os dados do formulário retroalimentado pelo método POST
        $nome = $_POST['nome'] ?? "Não informado"; // Uso do operador de coalescência nula caso o usuário não preencha nada
        $cpf = $_POST['cpf'] ?? "Não informado";
        $nascimento = $_POST['nascimento'] ?? "Não informado";
        $endereco = $_POST['endereco'] ?? "Não informado";
        $telefone = $_POST['telefone'] ?? "Não informado";
        $matricula = $_POST['matricula'] ?? "Não informado";
        $curso = $_POST['curso'] ?? "Não informado";
        $nome_respons = $_POST['nome_respons'] ?? "Não informado";
        $notas = $_POST['notas'] ?? "Não informado";
    ?>
    <!-- Área onde fica o Navbar -->
    <header>
        <div class="container-fluid" id="nav-container">
            <div class="row col-12">
                <div class="col-expand-lg col-sm-3" id="left">
                    <h1>Instituto de Menores<br>
                        Dom Antônio Zattera</h1>
                    <img id="logo" src="./img/logo_IMDAZ.svg" alt="IMDAZ">
                </div>
                <div class="col-expand-lg col-sm-3" id="right">
                    <nav class="navbar">
                        <a href="#">Sair</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Área do fomrulário de cadastro para aluno -->
        <div class="container-fluid" id="area-cad-aluno">
            <div class="row col-12" id="row-cad-aluno">
                <h2>Cadastro: Funcionário</h2>
                <div class="col-expand-lg col-sm-4" id="bloco-cad-aluno">    
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <p id="form">
                            <label for="nome">Nome:</label><br>
                            <input type="text" id="nome" name="nome" value="<?=$nome?>" required>
                        </p>
                        <p id="form">
                            <label for="cpf">CPF:</label><br>
                            <input type="text" id="cpf" name="cpf" value="<?=$cpf?>" required>
                        </p>
                        <p id="form">
                            <label for="nascimento">Data de Nascimento:</label><br>
                            <input type="date" id="nascimento" name="nascimento" value="<?=$nascimento?>" required>
                        </p>
                        <p id="form">
                            <label for="endereco">Endereço:</label><br>
                            <input type="text" id="endereco" name="endereco" value="<?=$endereco?>" required>
                        </p>
                        <p id="form">
                            <label for="telefone">Telefone:</label><br>
                            <input type="text" id="telefone" name="telefone" value="<?=$telefone?>" required>
                        </p>
                        <p id="form">
                            <label for="matricula">Número de Matrícula:</label><br>
                            <input type="text" id="matricula" name="matricula" value="<?=$matricula?>" required>
                        </p>
                        <p id="form">
                            <label for="curso">Curso:</label><br>
                            <input type="text" id="curso" name="curso" value="<?=$curso?>" required>
                        </p>
                        <p id="form">
                            <label for="nome_respons">Nome do/a Responsável:</label><br>
                            <input type="text" id="nome_respons" name="nome_respons" value="<?=$nome_respons?>" required>
                        </p>
                        <p id="form">
                            <label for="notas">Curso:</label><br>
                            <input type="text" id="notas" name="notas" value="<?=$notas?>" required>
                        </p>
                        <p id="form">
                            <button class="btn btn-success" type="submit">Enviar</button>
                        </p>
                    </form>
                </div>
                <!-- Div para mostrar os dados enviados pelo usuário -->
                <div class="col-expand-lg col-sm-4" id="resultado-cad-aluno">
                    <section id="resultado-cadastro-aluno">
                        <h2>Cadastro realizado!</h2>
                        <?php 
                            // Exibindo os dados informados pelo usuário
                            echo "<b>Nome:</b> $nome<br>
                            <b>CPF:</b> $cpf<br>
                            <b>Data de Nascimento:</b> $nascimento<br>
                            <b>Endereço:</b> $endereco<br>
                            <b>Telefone:</b> $telefone<br>
                            <b>Número de Matrícula:</b> $matricula<br>
                            <b>Curso:</b> $curso<br>
                            <b>Nome do/a Responsável:</b> $nome_respons<br>
                            <b>Notas:</b> $notas</p>";
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Seção final da página -->
    <footer>
        <div class="container-fluid">
            <div class="row" id="footer-row">
                <div class="col-12" id="conteudo-footer">
                    <p id="footer">2023 &copy; Projeto Integrador III-B. Desenvolvido por Eduarda Quintana, Leonardo Treichel e Tatiana Weska.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>