package escola;

public class Controle {

    public static void main(String[] args) {
        PF pf1 = new PF();
        pf1.setNome("Julia Almeida");
        pf1.setCpf("876.768.348-22");
        pf1.setRg("1676228934");
        pf1.setTitulacao("Doutorado em Engenharia da Computação");
        pf1.setLogradouro("Rua Andrade Neves");
        pf1.setNumero(10765);
        pf1.setCidade("Pelotas");
        pf1.setUf("RS");
        pf1.setDisciplina("Programação Orientada a Objetos");
        
        System.out.println("A colaboradora " + pf1.getNome() + " é professora de " + pf1.getDisciplina() + ".");
        
    }
    
}
