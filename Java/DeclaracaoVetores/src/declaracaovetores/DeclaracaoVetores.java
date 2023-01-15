/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package declaracaovetores;

import java.util.Scanner;

/**
 *
 * @author tfweska
 */
public class DeclaracaoVetores {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        //int tam = 10;
        //int vetor[] = new int[tam];
        
        //Forma 1 - índice
        /*
        for(int i=0; i < tam; i++)
        {
            vetor[i] = i;
        }
        
        //Isso significa que:
        //vetor[0] = 0 (vetor 0 armazena o valor 0)
        //vetor[1] = 1 (vetor 1 armazena o valor 1)
        //vetor[2] = 2 (vetor 2 armazena o valor 2)
        //vetor[3] = 3 (vetor 3 armazena o valor 3)
        //vetor[4] = 4 (vetor 4 armazena o valor 4)
        //vetor[5] = 5 (vetor 5 armazena o valor 5)
        //vetor[6] = 6 (vetor 6 armazena o valor 6)
        //vetor[7] = 7 (vetor 7 armazena o valor 7)
        //vetor[8] = 8 (vetor 8 armazena o valor 8)
        //vetor[9] = 9 (vetor 9 armazena o valor 9)
        
        //Obs: Profa. Alexandra comentou (02:28:33) que não utilizaríamos esse tipo de 
        //declaração de vetores na implementação dos algoritmos de substituiçao.
        
        for(int i=0; i < tam; i++)
        {
            System.out.println(vetor[i]);
        }
        
        //O primeiro for é para a atribuição de valores e o segundo for 
        //é para imprimir na tela essa atribuição que foi feita.
        */
        
        //Forma 2 - Teclado
        /*
        System.out.println("Entre com os valores: ");
        for(int i=0; i < tam; i++)
        {
            Scanner var1 = new Scanner(System.in);
            vetor[i] = var1.nextInt();
        }
        
        System.out.println("Os valores armazenados foram: ");
        for(int i=0; i < tam; i++)
        {
            System.out.println(vetor[i]);
        }
        */
        
        // Forma 3 - Aleatória
        //Essencial para a implementação do algoritmo aleatório.
        /*
        for(int i=0; i < tam; i++)
        {
            vetor[i] = (int)Math.round(Math.random()*4);
        }
        
        System.out.println("Os valores armazenados foram: ");
        for(int i=0; i < tam; i++)
        {
            System.out.println(vetor[i]);
        }
        */
        
        // Forma 4 - Declaração fixa
        //Precisaremos fazer mais de um vetor na implementação, um deles teria 
        //que ser de forma fixa. Os outros não necessariamente.
        //Utiliza-se quando sabemos quais valores queremos dar ao vetor.
        
        int vetor[] = {1,5,6,7,8,10,19,20,8,10};
        
        for(int i=0; i < vetor.length; i++)
        {
            System.out.println(vetor[i]);
        }
        
        //Existe uma quinta forma, mas não será abordada nessa aula.
        
    }
    
}
