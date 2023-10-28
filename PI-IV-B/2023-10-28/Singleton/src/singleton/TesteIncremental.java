/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package singleton;

/**
 *
 * @author tfweska
 */
public class TesteIncremental {
    public static void main(String[] args) {
        for (int i = 0; i <10; i++){
            Incremental inc = Incremental.getInstancia();
            System.out.println(inc);
        }
    }
}
