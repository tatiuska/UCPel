/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package calculadoraexp;

import java.util.Scanner;

/**
 *
 * @author tfweska
 */
public class CalculadoraExp {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int num1, num2, op;
        int resto;
        float resultado=0;
        
        System.out.println("Entre com o primeiro valor: ");
        Scanner var1 = new Scanner(System.in);
        num1 = var1.nextInt();
        
        System.out.println("Entre com o segundo valor: ");
        Scanner var2 = new Scanner(System.in);
        num2 = var2.nextInt();
        
        System.out.println("Digite a operação desejada:");
        System.out.println("1. Soma");
        System.out.println("2. Subtração");
        System.out.println("3. Multiplicação");
        System.out.println("4. Divisão");
        System.out.println("5. Exponenciação");
        
        Scanner var3 = new Scanner(System.in);
        op = var3.nextInt();
        
        switch(op)
        {
            case 1: 
                resultado = num1 + num2;
                System.out.println("O resultado da operação de soma é: " + resultado);
            break;
            
            case 2: 
                resultado = num1 - num2;
                System.out.println("O resultado da operação de subtração é: " + resultado);
            break; 
            
            case 3: 
                resultado = num1 * num2;
                System.out.println("O resultado da operação de multiplicação é: " + resultado);
            break; 
            
            case 4: 
                
                if(num2 == 0)
                {
                    System.out.println("Operação inválida! O denominador é igual a zero!");
                }
                else
                {
                    resultado = num1 / num2;
                    resto = num1 % num2;
                    System.out.println("O resultado da divisão é: " + resultado);
                    System.out.println("O resto da operação é: " + resto);
                }
                
            break;
            
            case 5:
                resultado = (int)Math.pow(num1,num2);
                System.out.println("O resultado da exponenciação é: " + resultado);
            break;
            
            default:
                System.out.println("Operação inválida!");
        }
        
    }
    
}
