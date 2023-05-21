package vehicledemo;

class Vehicle {
    int passengers; //número de passageiros
    int fuelcap; //capacidade armazenamento combustível
    int mpg; //consumo em milhas por galão
        
}
class VehicleDemo {    
    public static void main(String[] args) {
        Vehicle minivan = new Vehicle();
        int range;
        
        minivan.passengers = 7;
        minivan.fuelcap = 16;
        minivan.mpg = 21;
        
        range = minivan.fuelcap * minivan.mpg;
        System.out.println("Minivan can carry " + minivan.passengers + " with a range of " + range);
    }
    
}
