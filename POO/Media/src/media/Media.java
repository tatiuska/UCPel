//programa para calcular média de notas
package media;

public class Media {
    
    private double nota1;
    private double nota2;
    private double media;
        
    public void calculaMedia(double nota1, double nota2){
        this.nota1 = nota1;
        this.nota2 = nota2;
            
        media = (nota1 + nota2)/2;        
    }
        
    public double retornaMedia(){
        return media;
    }
}