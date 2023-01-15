package ex1aposentadoria;

import java.util.Scanner;

/**
 * @author tfweska
 */
public class Ex1Aposentadoria {

    public static void main(String[] args) {
        
        int cod, ano_nasc, ano_ing, ano_atual;
        int idade, tempo;
    
        ano_atual = 2022;
        
        System.out.println("Entre com o código do funcionário:");
        Scanner var1 = new Scanner(System.in);
        cod = var1.nextInt();
        
        System.out.println("Entre com o ano de nascimento do funcionário:");
        Scanner var2 = new Scanner(System.in);
        ano_nasc = var2.nextInt();
    
        System.out.println("Entre com o ano de ingresso do funcionário:");
        Scanner var3 = new Scanner(System.in);
        ano_ing = var3.nextInt();
    
        idade = ano_atual - ano_nasc;
        tempo = ano_atual - ano_ing;
        
        if(idade >= 65 || tempo >= 30 || (idade >= 60 && tempo >= 25))
        {
            System.out.println("O funcionário tem " + idade + " anos e trabalha na instituição há " + tempo + " ano(s).");
            System.out.println("Requer aposentadoria.");
        }
        else
        {
            System.out.println("O funcionário tem " + idade + " anos e trabalha na instituição há " + tempo + " ano(s).");
            System.out.println("Não requer aposentadoria.");
        }
    }
}
    