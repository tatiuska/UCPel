package geometricproblem;

public class GeometricProblem {

    public static void main(String[] args) {
        
        Triangulo forma1 = new Triangulo();
        forma1.altura = 8;
        forma1.base = 12;
        System.out.println("### Triângulo ###");
        System.out.println("Área: " + forma1.calculo_area());
        System.out.println("Perímetro: " + forma1.calculo_perimetro());
        System.out.println();
        
        Trapezio forma2 = new Trapezio();
        forma2.altura = 8;
        forma2.base_maior = 15;
        forma2.base_menor = 5;
        forma2.lado1 = 3;
        forma2.lado2 = 5;
        System.out.println("### Trapézio ###");
        System.out.println("Área: " + forma2.calculo_area());
        System.out.println("Perímetro: " + forma2.calculo_perimetro());
        System.out.println();
        
        Circulo forma3 = new Circulo();
        forma3.raio = 15;
        System.out.println("### Círculo ###");
        System.out.println("Área: " + forma3.calculo_area());
        System.out.println("Perímetro: " + forma3.calculo_perimetro());
        System.out.println();
    }
    
}
