package media;

import javax.swing.JOptionPane;

public class Principal {
    public static void main(String[] args){
        Media media = new Media();
        
        media.calculaMedia(8.5, 9.5);
        
        JOptionPane.showMessageDialog(null, "A média é: " + media.retornaMedia());
    }
}
