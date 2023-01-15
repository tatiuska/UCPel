package idiomasistema;

import java.util.Locale;

/**
 * @author tfweska
 */
public class IdiomaSistema {

    public static void main(String[] args) {
        
        Locale idioma = Locale.getDefault();
        System.out.print("O idioma padrão de seu sistema é em: ");
        System.out.println(idioma.getDisplayLanguage());    
    }
    
}
