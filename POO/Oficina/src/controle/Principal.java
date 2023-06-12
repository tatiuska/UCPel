package controle;

import modelo.Cliente;
import modelo.Veiculo;

public class Principal {
    public static void main(String[] args) {
        Cliente cli = new Cliente();
        Veiculo vei = new Veiculo();
        
        cli.Cliente("00000000000", "Roberto Carlos", " Rua das Roseiras, 27", " 053-5555-5656", " rc23@emailz.com");
        vei.Veiculo(" RRC-6669", " Fusca", 1968, " Volkswagen", " Azul calcinha", " Roberto Carlos");
        
        System.out.println("Cliente: " + vei.toString());
    }
}
