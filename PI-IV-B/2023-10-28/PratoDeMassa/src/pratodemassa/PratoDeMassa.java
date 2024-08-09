/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pratodemassa;

/**
 *
 * @author tfweska
 */
public abstract class PratoDeMassa {
    final void preparaReceita(){
        /* Ordem de como os métodos serão apresentados */
        aqueceAgua();
        preparaIngredientes();
        cozinhaMassa();
        preparaMolho();
        finaliza();
    }
    abstract void preparaIngredientes();
    abstract void preparaMolho();
    abstract void finaliza();
    
    private void aqueceAgua(){
        System.out.println("Aquecendo agua.");
    }
    
    private void cozinhaMassa(){
        System.out.println("Cozinhando massa.");
    }
}
