package escola;

public class Controle {
    public static void main(String[] args) {
        PF pessoafisica1; 
        pessoafisica1 = new PF();
        pessoafisica1.nome = setNome("Julia Almeida");
        pessoafisica1.cpf = setCpf("876.768.348-22");
        pessoafisica1.rg = setRg("1676228934");
        pessoafisica1.titulacao = setTitulacao("Doutorado em Engenharia da Computação");
        pessoafisica1.logradouro = setLogradouro("Rua Andrades Neves");
        pessoafisica1.numero = setNumero("10765");
        pessoafisica1.cidade = setCidade("Pelotas");
        pessoafisica1.uf = setUf("RS");
        pessoafisica1.disciplina = setDisciplina("Programação Orientada a Objetos");
        
        System.out.println("A colaboradora" + pessoafisica1.getNome() + "é professora de " + pessoafisica1.getDisciplina() ".");
        
    }
    
}
