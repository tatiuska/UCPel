//Exemplo de um TAD para transacoes em contas correntes bancárias
//Segundo arquivo criado
#include <stdio.h>
#include <string.h>
#include "transacao.h"

//Funcao para criacao de conta corrente
void criar(Conta *conta, char *nome_cliente, int conta_num, float saldo_conta) {
    strcpy(conta -> nome_cliente, nome_cliente);
    conta -> conta_num = conta_num;
    conta -> saldo_conta = saldo_conta;
}

//Funcao para deposito na conta corrente
int depositar(Conta *conta, float valor_deposito) {
    conta -> saldo_conta += valor_deposito;
    return 1;
}

//Funcao para saque da conta corrente
int sacar(Conta *conta, float valor_saque) {
    if((conta -> saldo_conta - valor_saque) >= 0) {
        conta -> saldo_conta -= valor_saque;
        return 1;
    }
    else 
        return 0;
}

//Funcao para transferencia para a conta corrente
int transferir(Conta *conta_origem, Conta *conta_destino, float valor_transfer) {
    if((conta_origem -> saldo_conta - valor_transfer) >= 0) {
        conta_origem -> saldo_conta -= valor_transfer;
        conta_destino -> saldo_conta += valor_transfer;
        return 1;
    }
    else
        return 0;
}

//Funcao para imprimir o extrato de uma conta corrente
void extrato(Conta *conta) {
    printf("Conta Corrente: %d \n", conta -> conta_num);
    printf("Nome do Cliente: %s \n", conta -> nome_cliente);
    printf("Saldo: %.2f \n", conta -> saldo_conta);
    printf("\n");
}