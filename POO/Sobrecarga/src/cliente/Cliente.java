package cliente;

public class Cliente {
    String nome;
    String sobrenome;
    int idade;
    
    //Exemplos de sobrecarga de métodos
    public Cliente(){
        
    }
    
    public Cliente(String nome){
        this.nome = nome;
    }
    
    public Cliente(int idade){
        this.idade = idade;
    }
    
    public Cliente(String nome, String sobrenome, int idade){
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.idade = idade;
    }
    
    //Para imprimir uma instância, é necessário criar o método toString!
    public String toString(){
        return nome + " " + sobrenome + " " + idade;
    }
}
