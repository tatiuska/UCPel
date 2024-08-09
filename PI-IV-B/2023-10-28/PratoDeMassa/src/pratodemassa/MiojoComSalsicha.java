/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pratodemassa;

/**
 *
 * @author tfweska
 */
public class MiojoComSalsicha extends PratoDeMassa {
    
    /* Subescrevendo os métodos para essa receita específica */
    @Override
    public void preparaIngredientes(){
        System.out.println("Separar 1 pacote de miojo e cortar 2 salsichas");
    }
    
    @Override
    public void preparaMolho(){
        System.out.println("Abrir o pacote do tempero do miojo.");
    }
    
    @Override
    public void finaliza() {
        System.out.println("Adicionar o tempero do miojo a massa e misturar bem.");
    }
}
