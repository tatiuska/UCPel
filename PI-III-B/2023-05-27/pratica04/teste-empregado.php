<?php 
    include("interface-empregado.php");
    include("horista-class.php");
    include("comissionado-class.php");

    //Implementação dos objetos
    $empregado1 = new Comissionado();
    $empregado1->nome = "Isabela Nascimento";
    $empregado1->cpf = 7776665532;
    $empregado1->salario_base = 850.00;
    $empregado1->total_vendas = 400.00;
    $empregado1->taxa_comissao = 20.00;

    $empregado2 = new Horista();
    $empregado2->nome = "Bruno da Silva";
    $empregado2->cpf = 99900066675;
    $empregado2->preco_hora = 52.90;
    $empregado2->horas_trabalhadas = 180;

    echo "A funcionária {$empregado1->get_nome()} receberá R$ {$empregado1->vencimento()}.\n";
    echo "O salário de {$empregado2->get_nome()} será de R$ {$empregado2->vencimento()}.\n";
?>