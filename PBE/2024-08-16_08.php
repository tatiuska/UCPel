<?php 
    // usando a classe DateTime
    $agora = new DateTime();
    $novaData = new DateTime("2024-08-30");
    $amanha = new DateTime("+1 day");

    echo ($agora->format("d/m/Y - H:i:s")) . "</br>";
    echo ($novaData->format("d/m/Y - H:i:s")) . "</br>";
    echo ($amanha->format("d/m/Y"));
?>