<?php 
    // Arrays multidimensionais - matriz
    $curso = ["PHP"=>$dados = ["Disciplina"=>"Programação em PHP", "CH"=>"60 horas", "Horário"=>"19h - 21h",], 
            "C"=>$dados = ["Disciplina"=>"Programação em C", "CH"=>"60 horas", "Horário"=>"21h - 23h",],];
    
    echo ($curso["PHP"]["Disciplina"]) . "</br>";
    echo ($curso["PHP"]["CH"]) . "</br>";
    echo ($curso["PHP"]["Horário"]) . "</br>";

    echo ($curso["C"]["Disciplina"]) . "</br>";
    echo ($curso["C"]["CH"]) . "</br>";
    echo ($curso["C"]["Horário"]) . "</br>";

?>