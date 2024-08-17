<?php 
    function geraNumeros() {
        $i = 0;
        $numeros = [];

        while($i < 6) {
            $r = rand(1, 60);

            $flag = 0;
            for($j=0; $j<$i; $j++) {
                if($numeros[$j] == $r) {
                    $flag -1;
                }

                if($flag == 0) {
                    $numeros[$i] = $r;
                    $i++;
                }
            }
        }

        sort($numeros);
        return $numeros;
    }

    for($i=1; $i<=10; $i++) {
        $numeros = geraNumeros();
        echo "$i: ";
        foreach($numeros as $key => $value) {
            echo "$value ";
        }

        echo "</br>";
    }
?>