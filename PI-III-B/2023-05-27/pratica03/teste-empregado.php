<?php 
    include("empregado-class.php");
    include("comissionado-class.php");
    include("horista-class.php");
    
    //Criando objeto - Horista
    $empregado1 = new Horista();
    $empregado1->nome = "Pedro Augusto";
    $empregado1->cpf = 99988877756;
    $empregado1->horas_trabalhadas = 40;
    $empregado1->preco_hora = 15;

    //Criando objeto - Comissionado
    $empregado2 = new Comissionado();
    $empregado2->nome = "Maria Clara";
    $empregado2->cpf = 77766688855;
    $empregado2->salario_base = 750;
    $empregado2->total_vendas = 200;
    $empregado2->taxa_comissao = 0.20;

    //Imprimindo informações
    echo "O funcionário {$empregado1->get_nome()} de CPF {$empregado1->get_cpf()} receberá {$empregado1->vencimento()}.\n";
    echo "O vencimento da funcionária {$empregado2->get_nome()} será de {$empregado2->vencimento()}.\n";
?>