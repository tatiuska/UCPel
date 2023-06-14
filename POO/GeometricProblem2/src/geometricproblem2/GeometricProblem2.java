// Demostração de que o uso de uma classe abstrata é mais adequado para resolver esse problema
package geometricproblem2;

import java.util.Scanner; // Importando o Scanner

public class GeometricProblem2 {

    public static void main(String[] args) {
        
        // Instanciando o primeiro objeto:
        Triangulo forma1 = new Triangulo();
        // Usando a função Scanner para o usuário digitar um valor para a altura.
        System.out.println("Entre com  a altura do triângulo: ");
        Scanner var1 = new Scanner(System.in);
        forma1.altura = var1.nextDouble();
        forma1.base = 12;
        System.out.println("#### Triângulo ####");
        System.out.println("Área: " + forma1.calculo_area());
        System.out.println("Perímetro: " + forma1.calculo_perimetro());
        System.out.println();
        
        // Instanciando o segundo objeto:
        Trapezio forma2 = new Trapezio();
        forma2.altura = 8;
        forma2.base_maior = 15;
        forma2.base_menor = 5;
        forma2.lado1 = 3;
        forma2.lado2 = 5;
        System.out.println("#### Trapézio ####");
        System.out.println("Área: " + forma2.calculo_area());
        System.out.println("Perímetro: " + forma2.calculo_perimetro());
        System.out.println();
        
        // Instanciando o terceiro objeto:
        Circulo forma3 = new Circulo();
        forma3.raio = 15;
        System.out.println("#### Círculo ####");
        System.out.println("Área: " + forma3.calculo_area());
        System.out.println("Perímetro: " + forma3.calculo_perimetro());
        System.out.println();
    }
    
}