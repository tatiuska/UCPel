<?php 
    // Estrutura de repetição: foreach
    $cor = [];
    $cor[0] = "Violeta";
    $cor[1] = "Azul Marinho";
    $cor[2] = "Indigo";

    foreach($cor as $valor) {
        echo($valor . "</br>");
    }

    // Capturando a chave e o valor no foreach
    foreach($cor as $chave=>$valor) {
        echo("Chave: $chave, Cor: $valor </br>");
    }

    // Usando o foreach para percorrer matrizes usando a expressão list
    $curso = [["PHP", ["Programação PHP", "60 horas", "19h-21h"]], 
                ["C", ["Programação em C", "40 horas", "21h-23h"]], 
                ["Java", ["Java Swing", "30 horas", "21h-23h"]],];
    foreach($curso as list($nome, list($disciplina, $CH, $horario))) {
        echo "$nome: $disciplina, $CH, $horario. </br>";
    }
?>