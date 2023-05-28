<?php 
    //Trabalhando o conceito de encapsulamento

    include("pessoa-class.php");
    include("aluno-class.php");
    
    //Instanciação dos objetos
    $pessoa1 = new Pessoa();
    $pessoa1->set_nome("Júlia Camargo");
    $pessoa1->set_cpf("876.987.789-77");
    $pessoa1->set_endereco("Rua Belém, 730");
    $pessoa1->set_telefone("(41) 9876-8888");
    $pessoa1->set_data_nasc("06/04/1987");
    $pessoa1->altura = 1.72;
    $pessoa1->peso = 58;

    $pessoa2 = new Pessoa();
    $pessoa2->set_nome("Cristiano Bastos");
    $pessoa2->set_cpf("765.546.678-33");
    $pessoa2->set_endereco("Beco do Batman, 33");
    $pessoa2->set_telefone("(11) 7890-8766");
    $pessoa2->set_data_nasc("21/09/1982");

    $aluno1 = new Aluno();
    $aluno1->set_nome("Luciana Borges");
    $aluno1->set_matricula(1275);
    $aluno1->curso = "Análise e Desenvolvimento de Sistemas";
    $aluno1->set_nota1(6.8);
    $aluno1->set_nota2(9.7);

    echo "A pessoa de nome {$pessoa1->get_nome()} tem IMC igual a {$pessoa1->calcImc()}.\n";
    echo "A pessoa de nome {$pessoa2->get_nome()} mora no {$pessoa2->get_endereco()}.\n";
    echo "A aluna {$aluno1->get_nome()} cursa {$aluno1->curso} e sua média atual é {$aluno1->mediaNotas()}";

?>