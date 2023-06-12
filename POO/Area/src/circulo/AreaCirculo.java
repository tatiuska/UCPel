package circulo;

public class AreaCirculo {
    static private double pi = 3.1416;
    private double raio;
    private double area;
        
    public void setRaio(double raio){
        this.raio = raio;
        area = pi * (raio * raio);
    }
        
    public double getArea(){
        return area;
    }
        
    public double getPi(){
        return pi;
    }
}
