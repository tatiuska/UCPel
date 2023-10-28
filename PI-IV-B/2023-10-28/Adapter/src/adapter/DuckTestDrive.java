/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package adapter;

/**
 *
 * @author tfweska
 */
public class DuckTestDrive {
    public static void main(String[] args) {
        MallardDuck duck = new MallardDuck();
        
        WildTurkey turkey = new WildTurkey();
        Duck turkeyAdapter = new TurkeyAdapter(turkey);
        
        System.out.println("The Turkey says...");
        turkey.gobble();
        turkey.fly();
        
        System.out.println("\nThe Duck says...");
        testDuck(duck);
        
        System.out.println("\nThe TurkeyAdapter says...");
        testDuck(turkeyAdapter);
    }
    
    static void testDuck(Duck duck){
        duck.quack();
        duck.fly();
    }
    
}
