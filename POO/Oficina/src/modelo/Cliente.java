package modelo;

public class Cliente {
    private String cpf;
    private String nome;
    private String endereco;
    private String fone;
    private String email;
    
    public void Cliente(String cpf, String nome, String endereco, String fone, String email){
        this.cpf = cpf;
        this.nome = nome;
        this.endereco = endereco;
        this.fone = fone;
        this.email = email;
    }
    
    @Override
    public String toString(){
        return cpf + "," + nome + "," + endereco + "," + fone + "," + email;
    }
    
    public String getCpf(){
        return cpf;
    }
    
    public void setCpf(String cpf){
        this.cpf = cpf;
    }
    
    public String getNome(){
        return nome;
    }
    
    public void setNome(String nome){
        this.nome = nome;
    }
    
    public String getEndereco(){
        return endereco;
    }
    
    public void setEndereco(String endereco){
        this.endereco = endereco;
    }
    
    public String getFone(){
        return fone;
    }
    
    public void setFone(String fone){
        this.fone = fone;
    }
    
    public String getEmail(){
        return email;
    }
    
    public void setEmail(String email){
        this.email = email;
    }
    
    
}
