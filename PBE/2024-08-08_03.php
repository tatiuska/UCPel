<?php 
    // Escopo de variáveis (UA 03)
    $custodofrete = 30;
    function totalpagamento($totalprodutos, $frete) {
        $custototal = 0; // Variável local no escopo interno da função
        for($indiceprod=0; $indiceprod<3; $indiceprod++) {
            $custototal = $custototal + $totalprodutos[$indiceprod];
        }
        $custototal += $frete;
        echo 'Custo do frete: ' . $custodofrete; // $custodofrete não é reconhecida 
        return $custototal;
    }
    $produtos = array(50, 200, 300);
    echo "Custo total: R$ " . totalpagamento($produtos, $custodofrete);
?>