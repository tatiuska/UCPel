<?php 
    // callback - UA 05
    $jogador = [["nome"=> "Pelé", "nota"=> 9],
                ["nome"=> "Maradona", "nota"=> 7], 
                ["nome"=> "Zico", "nota"=> 8],];
    
    usort($jogador, function($jogador1, $jogador2) {
        return($jogador1["nota"] < $jogador2["nota"] ? -1 : 1);
    });

    print_r($jogador);
?>