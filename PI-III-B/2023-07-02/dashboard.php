<!-- Página Inicial (Dashboard) IMDAZ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ -Área de Login</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS do Projeto -->
    <link rel="stylesheet" href="./css/style.css"> <!-- Estilos de todas as páginas do projeto -->
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous" defer></script>
</head>
<body>
    <!-- Área onde fica o Navbar -->
    <header>
        <div class="container-fluid" id="nav-container">
            <div class="row col-12 d-flex align-items-center">
                <div class="col-md-3 col-sm-3 d-inline" id="left">
                    <h1>Instituto de Menores<br>
                        Dom Antônio Zattera</h1>
                </div>
                <div class="col-md-6 col-sm-3 d-flex justify-content-start" id="middle">
                    <img id="logo" src="./img/logo_IMDAZ.svg" alt="IMDAZ">
                </div>
                <div class="col-md-6 col-sm-3 d-flex justify-content-end" id="right">
                    <nav class="navbar d-flex justify-content-end">
                        <a href="#">Entrar</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid text-center" id="menu-cadastro">
            <div class="row row d-flex justify-content-center">
                <div class="d-flex mx-auto col-10 col-md-8 col-lg-6" id="bloco-cadastro">
                    <h2>Cadastrar Pessoa</h2>
                    <div class="col-12" id="opcoes-cadastro">
                        <p>
                            Funcionário
                        </p> 
                        <p>
                            Colaborador
                        </p>
                        <p>
                            Aluno
                        </p>
                    </div>
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