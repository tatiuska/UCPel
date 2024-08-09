/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pratodemassa;

/**
 *
 * @author tfweska
 */
public class EspagueteAlhoOleo extends PratoDeMassa {
    
    /* Subescrevendo os métodos para essa receita específica */
    @Override
    public void preparaIngredientes() {
        System.out.println("Separar a massa, dois dentes de alho, sal e azeite de oliva extra-virgem.");
    }
    
    @Override
    public void preparaMolho() {
        System.out.println("Cortar os dentes de alho em fatias finas e fritar em fogo baixo em uma panela com o azeite.");
    }
    
    @Override
    public void finaliza() {
        System.out.println("Escorra a massa e acrescente na panela com o alho e o azeite. Misture bem.");
    }
    
}
