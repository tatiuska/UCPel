package metodosfinais;

public final class MensagemErro {
    //Atributos para armazenar os códigos de erro.
    final int OUTERR;
    final int INERR;
    final int DISKERR;
    final int INDEXERR;
    
    //Inicializando os atributos
    public MensagemErro(){
        this.OUTERR = 0;
        this.INERR = 1;
        this.DISKERR = 2;
        this.INDEXERR = 3;
    }
    
    String msgs[] = {
        "Output Error",
        "Input Error", 
        "Disk Full",
        "Index Out-Of-Bounds"
    };
    
    //Retorna a mensagem de erro.
    public final String getMensagemErro(int i){
        if(i >= 0 & i < msgs.length)
            return msgs[i];
        else
            return "Invalid Error Code!";
    }
    
}
