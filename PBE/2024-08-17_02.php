<?php       
    // usando funções add, sub e DateInterval
    $data = new DateTime("2017/11/01");
    $data -> add(new DateInterval('P1M1D'));
    echo $data -> format("d/m/Y") . "</br>";

    $data -> sub(new DateInterval('P1Y'));
    echo $data -> format("d/m/Y") . "</br>";

?>