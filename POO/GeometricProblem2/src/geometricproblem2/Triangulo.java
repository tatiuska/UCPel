package geometricproblem2;

public class Triangulo extends Formas {
    
    // Atributos
    double base;
    double altura;
    
    // Implementação dos métodos
    @Override
    public double calculo_area(){
        area = (base * altura)/2;
        return area;
    }
    
    @Override
    public double calculo_perimetro(){
        perimetro = (3 * base);
        return perimetro;
    }
}
