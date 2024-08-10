public class FahrenheitBoilerController implements BoilerController {
    
    @Override
    public void setTemperature(float temp){
        System.out.println("Definindo temperatura em Fahrenheit: " + temp + "F");
    }
}
