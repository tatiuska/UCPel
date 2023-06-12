package br.escola;

public class TestePolimorfismo {

    public static void main(String[] args) {
        Pessoa p, p2;
        p = new Pessoa("Alex Silva", "alex@email.com");
        p2 = new Funcionario("Lea Souza", "lea@email.com", 2000);
        
        p.mostrarInfo();
        p2.mostrarInfo();
    }
    
}
