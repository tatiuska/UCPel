/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package exdeznumeros;

import java.util.Scanner;

/**
 *
 * @author tfweska
 */
public class ExDezNumeros {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        int tam = 10;
        int vetor[] = new int[tam];
        int soma=0; 
        
        System.out.println("Entre com dez valores: ");
        for(int i=0; i < tam; i++)
        {
            Scanner var1 = new Scanner(System.in);
            vetor[i] = var1.nextInt();
        }
        
        for (int i=0; i < tam; i++)
        {
            if(vetor[i] < 40)
            {
                soma = soma + vetor[i];
            }
        }
        
        System.out.println("O valor da soma é: " + soma);
        
    }
    
}
