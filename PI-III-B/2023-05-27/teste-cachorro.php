<?php 
    include("cachorro-class.php");

    //Criando e instanciando os objetos
    $cachorro1 = new Cachorro();
    $cachorro1->nome = "Moli";
    $cachorro1->raca = "Shihtzu";
    $cachorro1->peso = 9;
    $cachorro1->cor = "Preto/Branco";
    $cachorro1->dono = "Alexandra";

    $cachorro2 = new Cachorro();
    $cachorro2->nome = "Jolie";
    $cachorro2->raca = "Lulu da Pomerânia";
    $cachorro2->peso = 5;
    $cachorro2->cor = "Laranja";
    $cachorro2->dono = "Alexandra";

    echo "Nome do cachorro: ".$cachorro1->nome."\n";
    $cachorro1->latir();
    $cachorro1->sentar();

    echo "\n";

    echo "Nome do cachorro: ".$cachorro2->nome."\n";
    $cachorro2->comer();
?>