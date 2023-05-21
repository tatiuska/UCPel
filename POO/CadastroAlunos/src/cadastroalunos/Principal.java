/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package cadastroalunos;

public class Principal {
    public static void main(String [] args){
        Aluno aluno = new Aluno();
        
        aluno.nome = "João da Silva";
        aluno.matricula = "00112233";
        aluno.endereco = "Rua Sete de Abril, 1034";
        aluno.telefone = "00-0000-0000";
        aluno.email = "joao@dominio.com.br";
        
        System.out.println("Nome: " + aluno.nome + " Matríucla: " + aluno.matricula + " Endereço: " + aluno.endereco + " Telefone: " + aluno.telefone + " Email: " + aluno.email);
    }
}
