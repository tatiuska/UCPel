<?php 
    // criação da classe ProdutoVip
    include 'produto.php';

    class ProdutoVip extends Produto {
        private $desconto;

        // Método construtor da classe ProdutoVip
        function __construct($varnome, $varpreco, $vardescricao, $varquantidade, $varcodigo, $vardesconto)
        {
            parent::__construct($varnome, $varpreco, $vardescricao, $varquantidade, $varcodigo);
            $this->desconto = $vardesconto;
        }

        public function getDesconto() {
            return $this->desconto;
        }

        public function setDesconto($vardesconto) {
            $this->desconto = $vardesconto;
        }
    }

    $produtovipatual = new ProdutoVip("Notebook", 2999, "Intel Core i5 6GB 1TB LED 14 Touchscreen Windows 8", 200, 28, 17.5);
    
    echo 'O valor do desconto do produto vip ' . $produtovipatual->getNome() . ' é ' . $produtovipatual->getDesconto() . ' %.';
?>