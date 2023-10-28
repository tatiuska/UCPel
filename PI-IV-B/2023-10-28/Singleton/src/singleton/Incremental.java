/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package singleton;

/**
 *
 * @author tfweska
 */
class Incremental {
    //CRIAR A VARIÁVEL ESTÁTICA DA CLASSE
    private static Incremental Instancia = null;
    private static int count = 0;
    private int numero;
    
    public Incremental() {
        numero = ++count;
    }
    
    //CRIAR O MÉTODO DE ACESSO
    // SE A CLASSE JÁ EXISTE, retorna ela
    
    public static Incremental getInstancia(){
        if(Instancia == null){
            Instancia = new Incremental();
        }
        return Instancia;
    }
    
    public String toString() {
        return "Incremental " + numero;
    }
}
