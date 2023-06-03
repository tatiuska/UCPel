package encapsulamento;

import javax.swing.JOptionPane;

public class Imprimir {
    private String nome;
    private String sobrenome;
    
    public void ImprimirTela(Streing nome, String sobrenome){
        nome = JOptionPane.showInputDialog("Digite sey nome: ");
        sobrenome = JOptionPane.showInputDialog("Digite seu sobrenome: ");
        
        this.nome = nome;
        this.sobrenome = sobrenome;
        
        JOptionPane.showMessageDialog(null, this.nome + " " + this.sobrenome);
    }
}
