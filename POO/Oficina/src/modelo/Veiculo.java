package modelo;

public class Veiculo {
    private String placa;
    private String modelo;
    private int ano;
    private String fabricante;
    private String cor;
    private String cliente;
    
    public void Veiculo(String placa, String modelo, int ano, String fabricante, String cor, String cliente){
        this.placa = placa;
        this.modelo = modelo;
        this.ano = ano;
        this.fabricante = fabricante;
        this.cor = cor;
        this.cliente = cliente;
    }
    
    @Override
    public String toString(){
        return cliente + "Veículo: " + "," + placa + "," + ano + "," + fabricante + "," + modelo + "," + cor;
    }
    
    public String getPlaca(){
        return placa;
    }
    
    public void setPlaca(String placa){
        this.placa = placa;
    }
    
    public String getModelo(){
        return modelo;
    }
    
    public void setModelo(String modelo){
        this.modelo = modelo;
    }
    
    public int getAno(){
        return ano;
    }
    
    public void setAno(int ano){
        this.ano = ano;
    }
    
    public String getFabricante(){
        return fabricante;
    }
    
    public void setFabricante(String fabricante){
        this.fabricante = fabricante;
    }
    
    public String getCor(){
        return cor;
    }
    
    public void setCor(String cor){
        this.cor = cor;
    }
    
    public String getCliente(){
        return cliente;
    }
    
    public void setCliente(String cliente){
        this.cliente = cliente;
    }
}
