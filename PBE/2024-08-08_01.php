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
    echo "Custo total: R$ " . totalpagamento($produtos, 30) . "</br>";
?>

<?php 
    function totalpagamento2($totalprodutos, $frete) {
        $custototal = 0;
        for($indiceprod=0; $indiceprod<count($totalprodutos); $indiceprod++) {
            $custototal = $custototal + $totalprodutos[$indiceprod];
        }
        $custototal += $frete;
        return $custototal;
    }

    $produtos = array(50, 200, 300);
    // Mudando o valor do frete na chamada da função
    echo "Custo total: R$ " . totalpagamento2($produtos, 50). "</br>";
?>

<?php 
    // Predefinindo o valor do parâmetro $frete na função)
    function totalpagamento3($totalprodutos, $frete=70) {
        $custototal = 0;
        for($indiceprod=0; $indiceprod<count($totalprodutos); $indiceprod++) {
            $custototal = $custototal + $totalprodutos[$indiceprod];
        }
        $custototal += $frete;
        return $custototal;
    }

    $produtos = array(50, 200, 300);
    echo "Custo total: R$ " . totalpagamento3($produtos). "</br>";
?>