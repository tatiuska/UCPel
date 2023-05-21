package vehicledemo;

class Vehicle {
    int passengers; //número de passageiros
    int fuelcap; //capacidade armazenamento combustível
    int mpg; //consumo em milhas por galão
        
}
//declarando um objeto do tipo Vehicle
class VehicleDemo {    
    public static void main(String[] args) {
        Vehicle minivan = new Vehicle();
        int range;
        
        //atribuindo valores aos campos de minivan
        minivan.passengers = 7;
        minivan.fuelcap = 16;
        minivan.mpg = 21;
        
        //cálculo de autonomia a partir de um tanque cheio de gasolina
        range = minivan.fuelcap * minivan.mpg;
        System.out.println("Minivan can carry " + minivan.passengers + " with a range of " + range);
    }
    
}
