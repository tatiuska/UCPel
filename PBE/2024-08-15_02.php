<?php 
    // Arrays
    // Criando arrays, forma atual
    $cor1 = ["Amarelo", "Azul", "Vermelho",];

    // Forma mais antiga
    $cor2 = array("Amarelo", "Azul", "Vermelho",);

    // Acessando elementos do array
    // Usando colchetes
    echo ($cor1[0]) . "</br>";

    // Usando chaves (depreciada a partir do PHP 7.4)
    // echo ($cor{1});

    // Definindo chaves manualmente
    $cor3 = [1=> "Amarelo", 2=> "Azul", 3=> "Vermelho"];
    echo ($cor3[2]) . "</br>";

    // Definindo chaves manualmente apenas em alguns elementos do array
    $cor4 = [2=>"Amarelo", 3=>"Azul", "Vermelho", "Laranja"];
    echo ($cor4[5]) . "</br>";

    // Criando um array e inserir os valores depois
    $cor5 = [];
    $cor[0] = "Amarelo";
    $cor[1] = "Azul";
    $cor[2] = "Vermelho";
?>