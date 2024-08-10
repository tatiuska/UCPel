public class Main {

    public static void main(String[] args) {
        FahrenheitBoilerController fahrenheitController = new FahrenheitBoilerController();
        BoilerController celsiusAdapter = new CelsiusBoilerAdapter(fahrenheitController);
        
        celsiusAdapter.setTemperature(90.0f);
    }
    
}
