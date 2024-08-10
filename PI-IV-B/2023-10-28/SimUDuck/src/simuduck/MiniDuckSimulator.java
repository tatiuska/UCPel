package simuduck;

public class MiniDuckSimulator {
    public static void main(String[] args) {
        Duck mallard = new MallardDuck();
        mallard.display();
        mallard.performQuack();
        mallard.performFly();
        
        Duck rubber = new RubberDuck();
        rubber.display();
        rubber.performQuack();
        rubber.swim();
    }
    
}
