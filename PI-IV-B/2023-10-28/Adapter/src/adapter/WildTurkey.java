package adapter;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author tfweska
 */
public class WildTurkey implements Turkey {
    @Override
    public void gobble(){
        System.out.println("Gobble gobble");
    }
    
    @Override
    public void fly(){
        System.out.println("I'm flying a short distance");
    }
}
