package ex2combustivel;

import java.util.Scanner;

/**
 * @author tfweska
 */
public class Ex2Combustivel 
{

    public static void main(String[] args) 
    {
        int litro;
        char tipo;
        
        float gasolina = (float)5.47;
        float alcool = (float)5.24;
        float valor_pagar, desconto, porcentagem, valor_pagar_desc; 
        
        System.out.println("Quantos litros foram abastecidos? ");
        Scanner var1 = new Scanner(System.in);
        litro = var1.nextInt();
        
        System.out.println("Qual o tipo de combustível? A - Álcool ou G - Gasolina ");
        Scanner var2 = new Scanner(System.in);
        tipo = var2.next().charAt(0); 
        
        if(tipo == 'A')
        {
            valor_pagar = litro * alcool;
            
            if(litro <= 20)
            {
                porcentagem = 3;
                desconto = (valor_pagar * porcentagem/100);
                valor_pagar_desc = valor_pagar - desconto;
                System.out.println("O valor a ser pago é R$ " + valor_pagar_desc);
            
            }
            else
            {
                porcentagem = 5;
                desconto = (valor_pagar * porcentagem/100);
                valor_pagar_desc = valor_pagar - desconto;
                System.out.println("O valor a ser pago é R$ " + valor_pagar_desc);
            
            }
        
        }
        else if (tipo == 'G')
        {
            valor_pagar = litro * gasolina;
            
            if(litro <= 20)
            {
                porcentagem = 4;
                desconto = (valor_pagar * porcentagem/100);
                valor_pagar_desc = valor_pagar - desconto;
                System.out.println("O valor a ser pago é R$ " + valor_pagar_desc);
            
            }
            
            else
            {
                porcentagem = 6;
                desconto = (valor_pagar * porcentagem/100);
                valor_pagar_desc = valor_pagar - desconto;
                System.out.println("O valor a ser pago é R$ " + valor_pagar_desc);
            
            }
        
        }
        
        else
        {
            System.out.println("Tipo de combustível não reconhecido! ");
        }
        
        }
    
}
