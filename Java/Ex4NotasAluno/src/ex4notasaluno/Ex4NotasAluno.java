package ex4notasaluno;

import java.util.Scanner;

/**
 *
 * @author tfweska
 */
public class Ex4NotasAluno 
{

    public static void main(String[] args) 
    {
        int quant_alunos;
        float nota1, nota2, nota3, nota4;
        float media_aluno;
        int aprovados=0;
        
        System.out.println("Insira a quantidade de alunos da turma: ");
        Scanner var1 = new Scanner (System.in);
        quant_alunos = var1.nextInt();
        
        float media[] = new float[quant_alunos];
        
        for(int i=0; i < quant_alunos; i++)
        {
            System.out.println("Entre com as notas do aluno " + i);
            
            System.out.println("Nota 1: ");
            Scanner var2 = new Scanner (System.in);
            nota1 = var2.nextInt();
            
            System.out.println("Nota 2: ");
            Scanner var3 = new Scanner (System.in);
            nota2 = var3.nextInt();
            
            System.out.println("Nota 3: ");
            Scanner var4 = new Scanner (System.in);
            nota3 = var4.nextInt();
            
            System.out.println("Nota 4: ");
            Scanner var5 = new Scanner (System.in);
            nota4 = var5.nextInt();
        
            media_aluno = (nota1+nota2+nota3+nota4)/4;
            media[i] = media_aluno;
        }
        
        for(int i=0; i < quant_alunos; i++)
        {
            if(media[i] >= 7)
            {
                aprovados++;
            }
        }
        
        System.out.println("O número de alunos aprovados é: " + aprovados);

    }
    
}