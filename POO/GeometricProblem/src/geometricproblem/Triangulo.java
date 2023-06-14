package geometricproblem;

public class Triangulo implements Formas {
    
    // Atributos
    double area;
    double perimetro;
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
