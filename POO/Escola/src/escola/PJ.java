package escola;

public class PJ extends Colaborador {
    private String razao_social;
    private String nome_fantasia;
    private String inscricao_municipal;
    private String inscricao_estadual;
    private String cnpj;
    private String website;
    
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
}
