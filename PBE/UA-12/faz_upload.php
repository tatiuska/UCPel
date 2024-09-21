<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php 
        // verifica se o arquivo existe
        $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

        // variáveis para guardar o conteúdo da superglobal $_FILES
        $nome = $_FILES['arquivo']['name'];
        $mime = $_FILES['arquivo']['type'];
        $tamanho = $_FILES['arquivo']['size'];
        $temp = $_FILES['arquivo']['tmp_name'];
        $erros = $_FILES['arquivo']['error'];

        // configurando o tamanho máximo de arquivo aceito
        $max_tamanho = 30000;

        // configurando o tipo MIME aceito
        $tipo = 'image/png';

        // renomeando nome do arquivo em minúsculas
        $nome = strtolower($nome);

        // troca espaços por underscore
        $nome = str_replace(" ", "_", $arquivo['name']);

        // caminho da subpasta para o upload
        $upload_dir = 'imagens/';

        // guarda o nome do arquivo com seu endereço
        $upload_file = $upload_dir . $nome;

        // testes de arquivo repetido, tamanho e tipo MIME
        if(file_exists($upload_file)) {
            echo "Já existe um arquivo chamado " . $nome . " na pasta " . $upload_dir . ". Tente de novo.<br />";
            exit;
        } elseif($tamanho > $max_tamanho) {
            echo "O arquivo enviado ultrapassa o tamanho máximo de " . $max_tamanho . " bytes. Tente novamente.<br />";
        } elseif($mime !== $tipo) {
            echo "O tipo MIME do arquivo enviado não é " . $tipo . ". Tente novamente.<br />";
        } else {
            // se o arquivo foi validado, será salvo na pasta imagens
            if(move_uploaded_file($temp, $upload_file)) {
                echo "Upload concluído com sucesso!<br />";
            } else {
                echo "Erro! Houve uma falha no processo de upload do arquivo! <br />";
                echo "<hr>";
                echo "Nome original do arquivo: " . $nome . "<br />";
                echo "Tipo MIME do arquivo: " . $tipo . "<br />";
                echo "Tamanho do arquivo em bytes: " . $tamanho . "<br />";
                echo "Nome temporário do arquivo: " . $temp . "<br />";
                echo "Código do erro ocorrido durante o upload do arquivo: " . $erros . "<br />";
                echo "<hr>";
            }
        }
    ?>
    <!-- adicionando um botão para voltar à outra página -->
    <input type="button" onclick="location.href='upload.html';" value="Voltar">
</body>
</html>