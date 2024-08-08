<?php 
    // Utilização de variáveis estáticas
    function contador() {
        // inicializada apenas na primeira vez e usada sempre que a função for chamada, e mantendo o último valor
        static $cont = 0; 
        echo $cont++;
    }
    for($cont=0; $cont<4; $cont++) {
        contador(); // será chamada 4 vezes, mantendo o valor $cont entre elas
    }
?>