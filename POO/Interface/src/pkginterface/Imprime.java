package pkginterface;

public class Imprime implements Contrato {
    
    String texto;
    
    @Override
    public void entrarComTexto(String texto) {
        this.texto = texto;
        
        System.out.println(texto);
    }
    
}
