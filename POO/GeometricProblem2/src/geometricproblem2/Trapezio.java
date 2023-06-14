package geometricproblem2;

public class Trapezio extends Formas {
    
    // Atributos
    double base_maior;
    double base_menor;
    double altura;
    double lado1;
    double lado2;
    
    // Implementação dos métodos
    @Override
    public double calculo_area(){
        area = ((base_maior + base_menor) * altura)/2;
        return area;
    }
    
    @Override
    public double calculo_perimetro(){
        perimetro = base_maior + base_menor + lado1 + lado2;
        return perimetro;
    }
}