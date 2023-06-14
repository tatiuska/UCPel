package geometricproblem2;

public abstract class Formas {
    
    //Atributos em comum a todas as classes
    double area;
    double perimetro;
    
    // Assinatura dos métodos para calcular a área e o perímetro
    public abstract double calculo_area();
    public abstract double calculo_perimetro();
}

