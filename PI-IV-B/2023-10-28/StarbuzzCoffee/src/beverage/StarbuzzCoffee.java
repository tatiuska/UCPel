/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package beverage;

/**
 *
 * @author tfweska
 */
public class StarbuzzCoffee {
    public static void main(String[] args) {
        Beverage beverage1 = new Espresso();
        System.out.println(beverage1.getDescription() + " $" + beverage1.cost());
        
        Beverage beverage2 = new DarkRoast();
        beverage2 = new Mocha(beverage2);
        beverage2 = new SteamedMilk(beverage2);
        beverage2 = new Whip(beverage2);
        beverage2 = new Soy(beverage2);
        System.out.println(beverage2.getDescription() + " $" + beverage2.cost());
        
        Beverage beverage3 = new Decaf();
        beverage3 = new Soy(beverage3);
        System.out.println(beverage3.getDescription() + " $" + beverage3.cost());
        
    }
    
}
