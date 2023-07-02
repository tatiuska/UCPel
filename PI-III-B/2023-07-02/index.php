<!-- Página principal IMDAZ (login)-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDAZ -Área de Login</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS do Projeto -->
    <link rel="stylesheet" href="./css/style.css"> <!-- Estilos comuns a todas as páginas do projeto -->
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous" defer></script>
</head>
<body>
    <!-- Área onde fica o Navbar -->
    <header>
        <div class="container-fluid" id="nav-container">
            <div class="row col-12">
                <div class="col-4 col-sm-3" id="left">
                    <h1>Instituto de Menores<br>
                        Dom Antônio Zattera</h1>
                </div>
                <div class="col-4 col-sm-3" id="middle">
                    <img id="logo" src="./img/logo_IMDAZ.svg" alt="IMDAZ">
                </div>
                <div class="col-4 col-sm-3" id="right">
                    <nav class="navbar d-flex">
                        <a href="#">Entrar</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container" id="area-login">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Sistema de Gestão de Pessoas</h2>
                    <p>
                        <label for="email">E-mail:</label><br>
                        <input type="text" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="senha">Senha:</label><br>
                        <input type="password" id="senha" name="senha" required>
                    </p>
                    <p>
                        <button>Enviar</button>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <!-- Seção final da página -->
    <footer>

    </footer>
</body>
</html>