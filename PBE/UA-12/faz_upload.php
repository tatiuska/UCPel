<!DOCTYPE html>
<html lang="en">
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
    ?>
</body>
</html>