package br.escola;

public class Funcionario extends Pessoa {
    private double salario;
    
    public Funcionario(String nome, String email, double salario){
        super(nome, email);
        this.salario = salario;
    }
    
    @Override
    public void mostrarInfo(){
        super.mostrarInfo();
        System.out.println("Salario: " + this.salario);
    }
}
