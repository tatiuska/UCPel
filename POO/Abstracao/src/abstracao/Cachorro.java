package abstracao;

public class Cachorro extends Animal {
    public Cachorro(String nome){
        super(nome);
    }
    @Override
    public void som(){
        System.out.println("O cachhorro " + nome + " faz au au");
    }
}
