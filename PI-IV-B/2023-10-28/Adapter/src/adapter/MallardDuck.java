package adapter;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author tfweska
 */
public class MallardDuck implements Duck {
    @Override
    public void quack(){
        System.out.println("Quack");
    }
    
    @Override
    public void fly(){
        System.out.println("I'm flying");
    }
}
