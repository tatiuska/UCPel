<?php 
    // Desafio - UA 05
    function periodo($dataInicial, $dataFinal) {
        $dataInicio = new DateTime($dataInicial);
        $dataFim = new DateTime($dataFinal);

        while($dataInicio <= $dataFim) {
            echo $dataInicio->format("d/m/Y") . "</br>";
            $dataInicio->add(new DateInterval('P1D'));
        }
    }

    periodo("2024-08-01", "2024-08-10")
?>