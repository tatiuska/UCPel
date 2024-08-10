package simuduck;

public class RubberDuck extends Duck {
    public RubberDuck() {
        flyBehavior = new FlyNoWay();
        quackBehavior = new MuteQuack();
    }
    
    @Override
    public void display() {
        System.out.println("Looks like a Rubber Duck!");
    }
}
