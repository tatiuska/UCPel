<?php 
abstract class Pessoa {

public $nome;
private $cpf;
public $nascimento;
private $endereco;
private $telefone;

///função1 
public function get_nome()
{
  return $this->nome;
} 

///função2
private function get_cpf()
{
    return $this->cpf;
}

///função3
public function get_nascimento()
{
    return $this->nascimento;
}

///função4
private function get_endereço()
{
    return $this->endereco;
}

///função5
private function get_telefone()
{
    return $this->telefone;
}
abstract function exibir_dados();


}
?>