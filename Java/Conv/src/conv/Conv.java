package conv;

import java.util.Scanner;

/**
 *
 * @author tfweska
 */
public class Conv {

    public static void main(String[] args) 
    {
        int escolha, decimal, resto; 
        StringBuilder resposta_bin = new StringBuilder();
        String binario;
        int potencia, bin_pot, soma=0;
        
        System.out.println("Escolha o tipo de conversão que deseja fazer: " +
                "\n 1 - Decimal para binário" +
                "\n 2 - Binário para decimal");
        Scanner var1 = new Scanner(System.in);
        escolha = var1.nextInt();
        
        if(escolha == 1)
        {
            System.out.println("Entre com um número decimal: ");
            Scanner var2 = new Scanner(System.in);
            decimal = var2.nextInt();
            
            if(decimal == 1 || decimal == 0)
            {
                System.out.println("O número em binário é: " + decimal);
            }
            else 
            {
                while(decimal >1)
                {
                resto = decimal%2;
                resposta_bin.append(resto);
                decimal = decimal/2;
                }
                
                resposta_bin.append('1');
                
                String invertida_bin = new StringBuilder(resposta_bin).reverse().toString();
                System.out.println("O valor em binÃ¡rio Ã©: " + invertida_bin);
            }
        }    
        else if(escolha == 2)
        {
            System.out.println("Entre com um nÃºmero binÃ¡rio: ");
            Scanner var3 = new Scanner(System.in);
            binario = var3.next();
            
            if(binario == "0" || binario == "1")
            {
                System.out.println("O nÃºmero em decimal Ã©: " + binario);
            }
            else 
            {
                potencia = binario.length() - 1;
                
                for(int i=0; i < binario.length(); i++)
                {
                    int potenciaDe2 = (int)Math.pow(2,potencia);
                    bin_pot = Integer.parseInt(String.valueOf(binario.charAt(i)));
                    
                    soma = soma + (potenciaDe2 * bin_pot);
                    potencia--;
                }
                
                System.out.println("O nÃºmero em decimal Ã©: " + soma);
            
            }
        }
        else 
        {
            System.out.println("Valor invÃ¡lido! ");
        }  
    }       
}
