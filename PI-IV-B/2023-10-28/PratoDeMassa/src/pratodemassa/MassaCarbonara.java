/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pratodemassa;

/**
 *
 * @author tfweska
 */
public class MassaCarbonara extends PratoDeMassa {
    
    /* Subescrevendo os métodos para essa receita específica */
    @Override
    public void preparaIngredientes(){
            System.out.println("Cortar 200g bacon, bater 2 ovos, ralar queijo pecorino, pimenta do reino a gosto.");
    }
    
    @Override
    public void preparaMolho(){
        System.out.println("Fritar o bacon e misturar ao ovo batido pimenta e queijo.");
    }
    
    @Override
    public void finaliza(){
        System.out.println("Retirar a agua da massa, adicionar o molho e misturar. ");
    }
    
}
