<?php 
    // Utilizando o session_start() em um carrinho de compras
    // inicializando a sessão
    session_start();

    // verificar se os dados existem
    if(isset($_POST["codproduto"]) and isset($_POST["quantidadeproduto"])) {
        
        // identificador do produto
        $codproduto = $_POST["codproduto"];

        // quantidade
        $quantidadeproduto = $_POST["quantidadeproduto"];

        // armazenando na sessão
        $_SESSION["produtopedido"][$codproduto] = intval($quantidadeproduto);
    }
?>