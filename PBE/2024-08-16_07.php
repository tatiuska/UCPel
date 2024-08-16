<?php 
    // operações de data e hora
    echo date("d/m/Y"). "</br>";
    echo date("H:i:s") . "</br>";
    echo date("d/m/Y H:i:s"). "</br>";
    echo date("d") . "</br>";

    // comparações de datas
    $d1 = date("Y/m/d");
    $d2 = "2024-06-06";

    if($d1 < $d2) {
        echo "$d1 é menor que $d2";
    } else {
        echo "$d1 é maior ou igual que $d2";
    }
?>