<?php 
    // Estruturas condicionais - Switch/Case
    $conceito = "B";

    switch($conceito) {
        case "A":
            echo "Aprovado com distinção.";
            break;
    
        case "B":
            echo "Plenamente aprovado.";
            break;
        
        case "C":
            echo "Aprovado.";
            break;
        
        default:
            echo "Reprovado.";
            break;
    }
?>