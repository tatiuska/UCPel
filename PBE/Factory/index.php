<?php 
    require_once "veiculo.php";
    require_once "renault.php";
    require_once "ford.php";
    require_once "chevrolet.php";
    require_once "factory.php";

    // Fatal error: Non-Static method factory::criaVeiculo() cannot be called statically
    $carro = factory::criaVeiculo('Ford');
    echo "O carro fabricado é um " . $carro->modeloCarro() . "<br />";

    $carro = factory::criaVeiculo('Renault');
    echo "Agora o carro fabricado é um " . $carro->modeloCarro() . "<br />";

    $carro = factory::criaVeiculo('Chevrolet');
    echo "E agora o carro fabricado é um " . $carro->modeloCarro() . "<br />";
?>