public class CelsiusBoilerAdapter implements BoilerController {
    private final BoilerController fahrenheitController;
    
    public CelsiusBoilerAdapter(BoilerController fahrenheitController) {
        this.fahrenheitController = fahrenheitController;
    }
    
    @Override
    public void setTemperature(float temp) {
        float tempInFahrenheit = (temp * 9 / 5) + 32;
        fahrenheitController.setTemperature(tempInFahrenheit);
    }
    
}
