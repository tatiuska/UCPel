package metodosfinais;

public class MetodosFinais {
    
    public static void main(String[] args) {
        //Instância da classe MensagemErro
        MensagemErro err = new MensagemErro();
        // Imprimindo as mensagens "Output Error" e "Disk Full"
        System.out.println(err.getMensagemErro(err.OUTERR));
        System.out.println(err.getMensagemErro(err.DISKERR));
    }
    
}
