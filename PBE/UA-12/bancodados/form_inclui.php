<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionários</title>
</head>
<body>
    <h2>Cadastro de funcionários - Inclusão</h2>
    <form action="inclui.php" enctype="multipart/form-data" method="post">
        <label for="nome_func">Nome do funcionário:</label>
        <input type="text" name="nome_func" id="nome_func"><br />
        <br />
        <label for="foto_func_endereco">Foto do funcionário:</label>
        <input type="file" name="foto_func_endereco" id="foto_func_endereco"><br />
        <br />
        <input type="submit" value="Enviar arquivo e incluir registro">
    </form>
</body>
</html>