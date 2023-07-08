<?php 

//Criando a classe Funcionário, herdando de Pessoa.
class Funcionario extends Pessoa {
   
  //Criando os atributos.
    public $cargo;
    private $salario;
    public $dataIngresso;
  
    // Método para exibir os dados do funcionário
    public function exibir_dados() {
      echo "Nome: " . $this->nome . "<br>";
      echo "CPF: " . $this->cpf . "<br>";
      echo "Data de Nascimento: " . $this->nascimento . "<br>";
      echo "Cargo: " . $this->cargo . "<br>";
      echo "Salário: " . $this->salario . "<br>";
      echo "Data de Ingresso: " . $this->dataIngresso . "<br>";
  }

}

?>