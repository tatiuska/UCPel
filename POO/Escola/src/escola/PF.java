package escola;

public class PF extends Colaborador {
    private String nome;
    private String cpf;
    private String rg;
    private int idade;
    private String titulacao;
    
    public void PF(String nome, String cpf, String rg, int idade, String titulacao){
        this.nome = nome;
        this.cpf = cpf;
        this.rg = rg;
        this.idade = idade;
        this.titulacao = titulacao;
    }
    
    public String getNome(){
        return nome;
    }
    
    public void setNome(String nome){
        this.nome = nome;
    }
    
    public String getCpf(){
        return cpf;
    }
    
    public void setCpf(String cpf){
        this.cpf = cpf;
    }
    
    public String getRg(){
        return rg;
    }
    
    public void setRg(String rg){
        this.rg = rg;
    }
    
    public int getIdade(){
        return idade;
    }
    
    public void setIdade(int idade){
        this.idade = idade;
    }
    
    public String getTitulacao(){
        return titulacao;
    }
    
    public void setTitulacao(String titulacao){
        this.titulacao = titulacao;
    }
}
