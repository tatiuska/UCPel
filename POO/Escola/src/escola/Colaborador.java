package escola;

public abstract class Colaborador {
    public String logradouro;
    public int numero;
    public String bairro;
    public String cidade;
    public String uf;
    public String telefone;
    public String email;
    public String disciplina;
    
    public void Colaborador(String logradouro, int numero, String bairro, String cidade, String uf, String telefone, String email, String disciplina){
        this.logradouro = logradouro;
        this.numero = numero;
        this.bairro = bairro;
        this.cidade = cidade;
        this.uf = uf;
        this.telefone = telefone;
        this.email = email;
        this.disciplina = disciplina;
    }
    
    public abstract String getLogradouro();
    
    public abstract void setLogradouro(String logradouro);
    
    public abstract int getNumero();
    
    public abstract void setNumero(int numero);
    
    public abstract String getBairro();
    
    public abstract void setBairro(String bairro);
    
    public abstract String getCidade();
    
    public abstract void setCidade(String cidade);
    
    public abstract String getUf();
    
    public abstract void setUf(String uf);
    
    public abstract String getTelefone();
    
    public abstract void setTelefone(String telefone);
    
    public abstract String getEmail();
    
    public abstract void setEmail(String email);
    
    public abstract String getDisciplina();
    
    public abstract void setDisciplina(String disciplina);
}
