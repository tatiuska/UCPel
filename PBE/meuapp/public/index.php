<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação Web</title>
    <!-- Exercício CL da UA 02 -->
</head>
<body>
    <h1>Enviar arquivo</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Selecione um arquivo para enviar:</p>
        <input type="file" name="arquivo"><br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>