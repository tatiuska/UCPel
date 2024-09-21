<?php 
    // exemplo de uso da função setcookie()
    $agora = date("d/m/Y H:i:s");
    setcookie("usuario", "Mauricio", time()+60*60*24); // segundos de um minuto x qtde minutos em 1h x qtde de horas em um dia = 86.400s
    setcookie("ultimo_acesso", $agora, time()+60*60*24);
?>