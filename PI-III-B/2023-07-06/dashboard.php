<!-- Página Inicial/Menu de Cadastro (Dashboard) IMDAZ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ - Menu de Cadastro</title>
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
        // conexão com o banco de dados
        include "conexao.php";
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
                <div class="col-expand-lg col-sm-3" id="right-in">
                    <nav class="navbar navbar-expand-lg nav-menu">
                        <ul>
                            <li class="item"><a class="nav-item nav-link" href="pesquisar.php" id="pesquisar">Pesquisar</a></li>
                            <li class="item"><a class="nav-item nav-link" href="edit-cadastro.php" id="edit-cadastro">Editar Cadastro</a></li>
                            <li class="item"><a class="nav-item nav-link" href="index.php" id="sair">Sair</a></li>
                            <li class="toggle"><a><span class="bars"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Área do menu de cadastro -->
        <div class="container-fluid" id="menu-cadastro">
            <div class="row col-12" id="row-menu-cadastro">
                <h2>Cadastrar Pessoa</h2>
                <div class="col-expand-lg col-sm-4" id="bloco-menu-cadastro">    
                    <p id="menu-cad-1">
                        <i class="bi bi-person-plus"></i><br>
                        <a class="a-menu" href="cad-funcionario.php">Funcionário</a>
                    </p>
                    <p id="menu-cad-1">
                        <i class="bi bi-person-plus"></i><br>
                        <a class="a-menu" href="cad-aluno.php">Aluno</a>
                    </p>
                    <p id="menu-cad-1">
                        <i class="bi bi-person-plus"></i><br>
                        <a class="a-menu" href="cad-colaborador.php">Colaborador</a>
                    </p>
                </div>
                <!-- Adicionar segunda div com estatísticas -->
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