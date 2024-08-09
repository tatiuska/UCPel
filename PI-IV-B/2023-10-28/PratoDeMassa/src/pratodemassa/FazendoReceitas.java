/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package pratodemassa;

/**
 *
 * @author tfweska
 */
public class FazendoReceitas {
    public static void main(String[] args) {
        /* criando e instanciando os novos objetos */
        System.out.println("Preparando Massa Carbonara: ");
        PratoDeMassa carbonara = new MassaCarbonara();
        carbonara.preparaReceita();
        
        System.out.println("\nPreparando Espaguete Alho e Oleo: ");
        PratoDeMassa espaguetealhooleo = new EspagueteAlhoOleo();
        espaguetealhooleo.preparaReceita();
        
        System.out.println("\nPreparando Miojo com Salsicha: ");
        PratoDeMassa miojosalsicha = new MiojoComSalsicha();
        miojosalsicha.preparaReceita();
    }
    
}
