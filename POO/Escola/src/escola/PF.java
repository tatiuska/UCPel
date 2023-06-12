package escola;

public class PF extends Colaborador {
    public String nome;
    public String cpf;
    public String rg;
    public int idade;
    public String titulacao;
    
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
    
    //Métodos Get
    
    @Override
    public String getLogradouro(){
        return logradouro;
    }
    
    @Override
    public int getNumero(){
        return numero;
    }
    
    @Override
    public String getBairro(){
        return bairro;
    }

    @Override
    public String getCidade(){
        return cidade;
    }
    
    @Override
    public String getUf(){
        return uf;
    }
    
    @Override
    public String getTelefone(){
        return telefone;
    }
    
    @Override
    public String getEmail(){
        return email;
    }
    
    @Override
    public String getDisciplina(){
        return disciplina;
    }
    
    //Métodos Set
    
    @Override
    public void setLogradouro(String logradouro){
        this.logradouro = logradouro;
    }
    
    @Override
    public void setNumero(int numero){
        this.numero = numero;
    }
    
    @Override
    public void setBairro(String bairro){
        this.bairro = bairro;
    }

    @Override
    public void setCidade(String cidade){
        this.cidade = cidade;
    }
         
    @Override
    public void setUf(String uf){
        this.uf = uf;
    }
    
    @Override
    public void setTelefone(String telefone){
        this.telefone = telefone;
    }
        
    @Override
    public void setEmail(String email){
        this.email = email;
    }
        
    @Override
    public void setDisciplina(String disciplina){
        this.disciplina = disciplina;
    }
}
