package escola;

public class Controle {
    public static void main(String[] args) {
        PF Pf1 = new Colaborador().new PF();
        Pf1.nome = setNome("Julia Almeida");
        Pf1.cpf = setCpf("876.768.348-22");
        Pf1.rg = setRg("1676228934");
        Pf1.titulacao = setTitulacao("Doutorado em Engenharia da Computação");
        Pf1.logradouro = setLogradouro("Rua Andrades Neves");
        Pf1.numero = setNumero("10765");
        Pf1.cidade = setCidade("Pelotas");
        Pf1.uf = setUf("RS");
        Pf1.disciplina = setDisciplina("Programação Orientada a Objetos");
        
        System.out.println("A colaboradora" + Pf1.getNome() + "é professora de " + Pf1.getDisciplina() ".");
        
    }
    
}
