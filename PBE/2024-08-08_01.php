<?php 
    // Criando uma função (UA 03)
    function totalpagamento($totalprodutos, $frete) {
        $custototal = 0;
        for($indiceprod=0; $indiceprod<count($totalprodutos); $indiceprod++) {
            $custototal = $custototal + $totalprodutos[$indiceprod];
        }
        $custototal += $frete;
        return $custototal;
    }

    $produtos = array(50, 200, 300);
    echo "Custo total: R$ " . totalpagamento($produtos, 30);
?>