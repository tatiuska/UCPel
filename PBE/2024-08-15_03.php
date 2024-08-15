<?php 
    // Arrays Associativos: contém strings como índice
    $endereco = [];
    $endereco["rua"] = "Rua do Limoeiro";
    $endereco["numero"] = "450";
    $endereco["cidade"] = "São Paulo";

    echo ($endereco["rua"]) . "</br>";

    // Criando um array associativo atribuindo os valores direto na declaração
    $endereco2 = ["rua"=> "Rua do Limoeiro", 
                    "numero"=> "450",
                    "cidade"=> "São Paulo", ];
    
    echo ($endereco2["cidade"]);
?>