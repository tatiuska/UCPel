package geometricproblem2;

public class Circulo extends Formas {
    
    // Atributos
    double pi = 3.14;
    double raio;
    
    // Método
    @Override
    public double calculo_area(){
        area = (pi * Math.pow(raio, 2));
        return area;
    }
    
    @Override
    public double calculo_perimetro(){
        perimetro = 2 * pi * raio;
        return perimetro;
    }
}

