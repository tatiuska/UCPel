<?php 
    // Uso de chaves = o PHP fará a identificação do que está dentro delas
    // como uma string que contém o real nome da variável.
    ${'789'} = 'abc';
    echo ${'789'};
?>