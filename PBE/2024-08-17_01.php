<?php 
    // usando a função diff para capturar diferenças entre datas
    $dataInicial = new DateTime("2017-12-01");
    $dataFinal = new DateTime();
    $intervalo = $dataInicial->diff($dataFinal);
    echo $intervalo->format("%R%a dias");
?>