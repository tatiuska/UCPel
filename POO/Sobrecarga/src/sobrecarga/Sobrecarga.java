package sobrecarga;

import cliente.Cliente;
        
public class Sobrecarga {

    public static void main(String[] args) {
        Cliente c = new Cliente();
        Cliente c1 = new Cliente("Jorge");
        Cliente c2 = new Cliente("Jorge", "Campos", 39);
        
        System.out.println(c);
        System.out.println(c1);
        System.out.println(c2);
    }
    
}
