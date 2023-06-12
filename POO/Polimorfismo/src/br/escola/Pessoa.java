package br.escola;

public class Pessoa {
    private String nome;
    private String email;
    
    public Pessoa(String nome, String email){
        this.nome = nome;
        this.email = email;
    }
    
    public void mostrarInfo(){
        System.out.println("Nome: " + this.nome);
        System.out.println("E-mail: " + this.email);
    }
}
