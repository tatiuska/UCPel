<?php 
    // funções variádicas - UA 05
    function imprime(...$args) {
        foreach($args as $chave=>$valor) {
            echo "Parâmetro $chave: $valor </br>";
        }
    }

    imprime("Amarelo", "Azul", "Vermelho");
?>