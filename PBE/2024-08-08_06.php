<?php 
    // Usando a função setcookie
    $custototal = 580;
    setcookie("CustoTotalPedido", $custototal, time()+7200);

    echo "Custo Total: R$ " . $_COOKIE["CustoTotalPedido"];
?>