/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package beverage;

/**
 *
 * @author tfweska
 */
public class DarkRoast extends Beverage {
    public DarkRoast(){
        description = "Dark Roast Coffee";
    }
    
    @Override
    public double cost(){
        return 0.99;
    }
}
