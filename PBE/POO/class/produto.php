<?php 
    class Produto {
        private $nome;
        private $preco;
        private $descricao;
        private $quantidade;
        private $codigo;
        // private $fabricante; 
        // private $categoria;

        // método construtor da classe Produto
        function __construct($varnome, $varpreco, $vardescricao, $varquantidade, $varcodigo) {
            $this->nome = $varnome;
            $this->preco = $varpreco;
            $this->descricao = $vardescricao;
            $this->quantidade = $varquantidade;
            $this->codigo = $varcodigo;
        }

        // obter valor do atributo nome
        public function getNome() {
            return $this->nome;
        }

        // definir valor do atributo nome
        public function setNome($varnome) {
            $this->nome = $varnome;
        }

        // obter valor do atributo preço
        public function getPreco() {
            return $this->preco;
        }

        // definir valor ao atributo preço
        public function setPreco($varpreco) {
            $this->preco = $varpreco;
        }

        // obter valor do atributo descrição
        public function getDescricao() {
            return $this->descricao;
        }

        // definir valor ao atributo descrição
        public function setDescricao($vardescricao) {
            $this->descricao = $vardescricao;
        }

        // obter valor do atributo quantidade
        public function getQuantidade() {
            return $this->quantidade;
        }

        // definir valor ao atributo quantidade
        public function setQuantidade($varquantidade) {
            $this->quantidade = $varquantidade;
        }

        // obter valor do atributo código
        public function getCodigo() {
            return $this->codigo;
        }

        // definir valor ao atributo código
        public function setCodigo($varcodigo) {
            $this->codigo = $varcodigo;
        }
    }

    // Instanciando um objeto da classe
    $produtoatual = new Produto("Notebook", 2999, "Intel Core i5 6GB 1TB LED Touchscreen Windows 8", 200, 28);

    // chamando um método da classe
    $produtoatual->setNome("Notebook - edição especial");
    
?>