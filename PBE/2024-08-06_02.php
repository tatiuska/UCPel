<?php 
    // Na prática - UA 01
    // Demonstrando a tipagem fraca do PHP
    $var1 = 12.53;
    echo "No começo, o tipo de dado é: " . gettype($var1);
    echo "</br>";

    $var1 = FALSE; 
    echo "Depois, o tipo de dado fica: " . gettype($var1);
    echo "</br>";

    // Definindo uma constante
    define('OLA_MUNDO', 'Olá Mundo!');
    echo "A tradução de Hello World é " . OLA_MUNDO;
    echo "</br>";

    // Utilizando a constante mágica __LINE__
    echo "A linha de código que está sendo executada é a " . __LINE__;
    echo "</br>";

    // Usando a função var_dump()
    $var2 = "a";
    echo "As variáveis são:";
    var_dump($var1, $var2);
    echo "</br>";

    // Usando operadores de comparação
    if($var1 <> $var2)
    echo "Portanto, elas são diferentes.";
    else
    echo "Portanto, elas são iguais.";

?>