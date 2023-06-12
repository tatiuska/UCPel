package escola;

public class PJ extends Colaborador {
    public String razao_social;
    public String nome_fantasia;
    public String inscricao_municipal;
    public String inscricao_estadual;
    public String cnpj;
    public String website;
    
    public void PJ(String razao_social, String nome_fantasia, String inscricao_municipal, String inscricao_estadual, String cnpj, String website){
        this.razao_social = razao_social;
        this.nome_fantasia = nome_fantasia;
        this.inscricao_municipal = inscricao_municipal;
        this.inscricao_estadual = inscricao_estadual;
        this.cnpj = cnpj;
        this.website = website;
    }
    
    public String getRazaoSocial(){
        return razao_social;
    }
    
    public void setRazaoSocial(String razao_social){
        this.razao_social = razao_social;
    }
    
    public String getNomeFantasia(){
        return nome_fantasia;
    }
    
    public void setNomeFantasia(String nome_fantasia){
        this.nome_fantasia = nome_fantasia;
    }
    
    public String getInscricaoMunicipal(){
        return inscricao_municipal;
    }
    
    public void setInscricaoMunicipal(String inscricao_municipal){
        this.inscricao_municipal = inscricao_municipal;
    }
    
    public String getInscricaoEstadual(){
        return inscricao_estadual;
    }
    
    public void setInscricaoestadual(String inscricao_estadual){
        this.inscricao_estadual = inscricao_estadual;
    }
    
    public String getCnpj(){
        return cnpj;
    }
    
    public void setCnpj(String cnpj){
        this.cnpj = cnpj;
    }
    
    public String getWebsite(){
        return website;
    }
    
    public void setWebsite(String website){
        this.website = website;
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
