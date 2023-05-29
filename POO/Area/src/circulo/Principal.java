package circulo;

public class Principal {
    
    public static void main(String[] args){
        AreaCirculo c1 = new AreaCirculo();
        c1.setRaio(3);
        
        System.out.println("A área de c1 é: " + c1.getArea());
        System.out.println("O pi é: " + c1.getPi());
        
        AreaCirculo c2 = new AreaCirculo();
        c2.setRaio(5);
        
        System.out.println("A área de c2 é: " + c2.getArea());
        System.out.println("O pi é: " + c2.getPi());
    }
}
