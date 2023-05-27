<?php 
    include("pessoa-class.php");
    include("aluno.class.php");

    //Criação dos objetos
    $pessoa1 = new Pessoa();
    $pessoa1->$nome = "Maria";
    $pessoa1->$idade = 25;
    $pessoa1->$cpf = 00033322245;
    $pessoa1->


    echo "A pessoa de nome {$pessoa1->nome} mora na {$pessoa1->endereco}.\n";
    echo "a pessoa de nome ... tem IMC igual a {$pessoa2->calcImc()}.\n";
?>