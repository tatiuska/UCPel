<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php 
        // variável que receberá a localização da pasta onde a imagem será salva
        $upload_dir = 'imagens/';
        $upload_file = $upload_dir . $_FILES['arquivo']['name'];
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $upload_file)) {
            echo "Upload efetuado com sucesso!";
        } else {
            echo "Ops! Houve uma falha no processo de upload do arquivo!";
        }
        echo "<br /><hr>";

        // usando a superglobal $_FILES para exibir informações do arquivo
        $nome = $_FILES['arquivo']['name'];
        echo "Nome original do arquivo: " . $nome . "<br />";

        $mime = $_FILES['arquivo']['type'];
        echo "Tipo MIME do arquivo: " . $mime . "<br />";

        $tamanho = $_FILES['arquivo']['type'];
        echo "Tamanho do arquivo em bytes: " . $tamanho . "<br />";
    ?>
    <!-- adicionando um botão para voltar à outra página -->
    <input type="button" onclick="location.href='upload.html';" value="Voltar">
</body>
</html>