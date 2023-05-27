<?php 
    include("pessoa-class.php");
    include("aluno-class.php");

    //Criação dos objetos
    $pessoa1 = new Pessoa();
    $pessoa1->nome = "Juliana";
    $pessoa1->idade = 25;
    $pessoa1->cpf = 00033322245;
    $pessoa1->endereco = "Rua do Limoeiro, 35";
    $pessoa1->telefone = "(53)99999-9999";

    $pessoa2 = new Pessoa();
    $pessoa2->nome = "Pedro";
    $pessoa2->idade = 35;
    $pessoa2->cpf = 88877744400;
    $pessoa2->endereco = "Beco do Chaves, 12";
    $pessoa2->telefone = "(11)98765-8888";
    $pessoa2->altura = 1.78;
    $pessoa2->peso = 70;

    $aluno1 = new Aluno();
    $aluno1->nome = "Diogo";
    $aluno1->idade = 32;
    $aluno1->matricula = 1012;
    $aluno1->curso = "Análise e Desenvolvimento de Sistemas";
    $aluno1->nota1 = 7.0;
    $aluno1->nota2 = 8.5;

    echo "A pessoa de nome {$pessoa1->nome} mora na {$pessoa1->endereco}.\n";
    echo "A pessoa de nome {$pessoa2->nome} tem IMC igual a {$pessoa2->calcImc()}.\n";
    echo "O aluno {$aluno1->nome} é do curso {$aluno1->curso}, e sua média é {$aluno1->mediaAluno()}.\n";
?>