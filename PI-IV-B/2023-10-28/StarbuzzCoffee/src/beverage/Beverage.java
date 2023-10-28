/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/* Aplicação do Padrão de Projeto Decorator */
package beverage;

/**
 *
 * @author tfweska
 */
public abstract class Beverage {
    String description = "Unknown Beverage";
    
    public String getDescription(){
        return description;
    }
    
    public abstract double cost();
}
