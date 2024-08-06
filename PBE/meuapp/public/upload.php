<?php 
    // 
    if(isset($_FILES['arquivo'])) {
        $arquivo = $_FILES['arquivo'];
        $nome = $arquivo['name'];
        $tmp_nome = $arquivo['tmp_name'];
        $error = $arquivo['error'];

        if($error === UPLOAD_ERR_OK) {
            move_uploaded_file($tmp_nome, 'uploads/' . $nome);
            echo 'Arquivo enviado com sucesso!';
        } else {
            echo 'Ocorreu um erro ao enviar o arquivo. Tente novamente mais tarde.';
        }

    }
?>