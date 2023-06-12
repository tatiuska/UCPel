package escola;

public class Controle {

    public static void main(String[] args) {
        PF pf1; 
        pf1 = new PF();
        pf1.nome = setNome("Julia Almeida");
        pf1.cpf = setCpf("876.768.348-22");
        pf1.rg = setRg("1676228934");
        pf1.titulacao = setTitulacao("Doutorado em Engenharia da Computação");
        pf1.logradouro = setLogradouro("Rua Andrades Neves");
        pf1.numero = setNumero(10765);
        pf1.cidade = setCidade("Pelotas");
        pf1.uf = setUf("RS");
        pf1.disciplina = setDisciplina("Programação Orientada a Objetos");
        
        System.out.println("A colaboradora" + getNome(nome) + "é professora de " + getDisciplina(disciplina) + ".");
        
    }
    
}
