//Exemplo de um TAD para transacoes em contas correntes bancárias
//Terceiro arquivo criado
#include "transacao.c"

main() {

    //Cria as contas correntes
    Conta Conta1;
    criar(&Conta1, "Jeanine", 1001, 0.0);
    Conta Conta2;
    criar(&Conta2, "Pedro", 2002, 1500.0);
    Conta Conta3;
    criar(&Conta3, "Maria", 3003, 10000.0);

    //Faz transacoes com a conta corrente 1
    depositar(&Conta1, 73.00);
    sacar(&Conta1, 70.00);
    extrato(&Conta1);

    //Faz transacoes com a conta corrente 2
    depositar(&Conta2, 0.0);
    sacar(&Conta2, 1600.00);
    extrato(&Conta2);

    //Faz transacoes com a conta corrente 3
    depositar(&Conta3, 500.00);
    sacar(&Conta3, 500.00);
    extrato(&Conta3);

    //Transfere valor entre as contas 3 e 2
    transferir(&Conta3, &Conta2, 1000.00);
    extrato(&Conta2);
    extrato(&Conta3);
}
