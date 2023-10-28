/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package beverage;

/**
 *
 * @author tfweska
 */
public class SteamedMilk extends CondimentDecorator {
    Beverage beverage;
    
    public SteamedMilk(Beverage beverage){
        this.beverage = beverage;
    }
    
    @Override
    public String getDescription(){
        return beverage.getDescription() + ", Steamed Milk";
    }
    
    @Override
    public double cost(){
        return 0.20 + beverage.cost();
    }
}
