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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>
    <?php 
        include "./php/conexao.php";
    ?>
<body>
    <!-- Header e Navbar -->
    <header class="navbar navbar-expand-lg bd-navbar sticky-top">
        <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Menu de navegação">
            <a class="navbar-brand" href="#">
                <p>
                    Instituto de Menores
                    Dom Antônio Zattera
                </p> 
                <img src="./img/logo_IMDAZ.png" alt="Logo" width="128" height="58" class="d-inline-block align-text-top">
            </a>
            <ul class="nav navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-item nav-link" href="#" id="contato-menu">Entrar</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container" id="login">
            <div class="row">
                <div class="col-12">
                    <h1>Sistema de Gestão de Pessoas</h1>
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