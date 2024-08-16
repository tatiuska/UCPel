<?php 
    // função que retorna um array - UA 05
    function maiorMenor($arg1, $arg2, $arg3) {
        if(($arg1 > $arg2) and ($arg1 > $arg3)) {
            $maior = $arg1;
        } else if($arg2 > $arg3) {
            $maior = $arg2;
        } else {
            $maior = $arg3;
        }

        if(($arg1 < $arg2) and ($arg1 < $arg3)) {
            $menor = $arg1;
        } else if($arg2 < $arg3) {
            $menor = $arg2;
        } else {
            $menor = $arg3;
        }

        return [$maior, $menor];
    }

    var_dump(list($maior, $menor) = maiorMenor(12, 67, 1));
?>