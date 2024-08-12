<?php 
    // Comando Continue
    $i = 0;

    while($i <= 9) {
        $i++;
        if(($i >= 3) and ($i <= 6)) {
            continue;
        }
        echo $i;
    }
?>