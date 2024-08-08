<?php 
    // Escopo de variáveis (UA 03)
    $custodofrete = 30;
    function totalpagamento($totalprodutos, $frete) {
        $custototal = 0; // Variável local no escopo interno da função
        global $custodofrete; // $custodofrete terá escopo global, passando a ter o valor da variável $custodofrete externa
        for($indiceprod=0; $indiceprod<3; $indiceprod++) {
            $custototal = $custototal + $totalprodutos[$indiceprod];
        }
        $custototal += $frete;
        echo 'Custo do frete: R$ ' . $custodofrete . "</br>"; // $custodofrete não é reconhecida 
        return $custototal;
    }
    $produtos = array(50, 200, 300);
    echo "Custo total: R$ " . totalpagamento($produtos, $custodofrete);
?>