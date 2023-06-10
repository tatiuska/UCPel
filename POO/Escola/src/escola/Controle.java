package escola;

public class Controle {
    public static void main(String[] args) {
        Colaborador Cb1 = new Colaborador();
        Cb1.nome = setNome("Julia Almeida");
        Cb1.cpf = setCpf("876.768.348-22");
        Cb1.rg = setRg("1676228934");
        Cb1.titulacao = setTitulacao("Doutorado em Engenharia da Computação");
        Cb1.logradouro = setLogradouro("Rua Andrades Neves");
        Cb1.numero = setNumero("10765");
        Cb1.cidade = setCidade("Pelotas");
        Cb1.uf = setUf("RS");
        Cb1.disciplina = setDisciplina("Programação Orientada a Objetos");
        
        System.out.println("A colaboradora" + Cb1.getNome() + "é professora de " + Cb1.getDisciplina() ".");
        
    }
    
}
