<!-- Página Incial: Tela de Login -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ - Sistema de Gerenciamento de Pessoas</title>
    <!-- Link para o CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous" defer></script>
</head>
    <?php 
        include "./php/conexao.php";
    ?>
<body>
    <!-- Header e Navbar -->
    <div class="container-fluid" id="header-navbar">
        <header class="row">
            <nav class="navbar navbar-expand-sm" aria-label="Menu de navegação">
                <div class="col-12 d-flex flex-row p-2" id="left">
                    <div class="col-md-4" id="title">
                        <h1>Instituto de Menores<br>
                        Dom Antônio Zattera</h1>
                    </div>
                    <div class="col-md-4" id="img">
                        <img src="./img/logo_IMDAZ.png" alt="Logo" width="128" height="58" class="d-inline-block align-text-top">
                    </div>
                    <div class="col-md-4 d-flex flex-row-reverse" id="right">
                        <div class="collapse navbar-collapse" id="navbar-links">
                            <ul class="nav navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="#" id="entrar">Entrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <main>
        <div class="container" id="login">
            <div class="row">
                <div class="col-12" id="area-login">
                    <h2>Sistema de Gestão de Pessoas</h2>
                    <p>Faça seu login aqui:</p>
                </div>
            </div>
        </div>
    </main>
    <!-- Fim da página -->
    <footer class="footer">
        <div class="container">
            <div class="row" id="footer-row">
                <div class="col-12" id="conteudo-final">
                    <p>2023 &copy; Projeto Integrador III-B. Desenvolvido por Eduarda Quintana, Leonardo Treichel e Tatiana Weska.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>