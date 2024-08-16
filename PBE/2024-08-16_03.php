<?php 
    // Função sem retorno - UA 05
    function trocaValor(&$arg1, $arg2) {
        $tmp = $arg1;
        $arg1 = $arg2;
        $arg2 = $tmp;
    }

    $x = 10;
    $y = 5;

    trocaValor($x, $y);
    echo ("x: $x, y: $y");
?>