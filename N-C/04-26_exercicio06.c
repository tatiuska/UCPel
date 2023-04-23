#include <stdio.h>

//programa para ler o salario atual do funcionario, o tempo de trabalho do funcionario na empresa.
//calcular o salario reajustado e imprimir o valor reajustado, ou uma mensagem caso o funcionario nao tenha direito a um aumento.
int main(){

    //variaveis
    float salario_atual, reajuste, bonus, salario_final;
    int tempo_servico;

    //dados de entrada
    printf("Informe seu salario atual: \n");
    scanf("%f", &salario_inicial);

    printf("Informe quantos ha anos voce trabalha na empresa: \n");
    scanf("%d", &tempo_servico);

    //processamento
    if(salario_atual <= 500.00 && tempo_servico < 1){
        reajuste = salario_atual + (salario_atual * 0.25);
        printf("Você nao tem direito a bonus\n");
    } else if((salario_atual > 500.00 && salario_atual <= 1000.00) && tempo_servico < 1){
        reajuste = salario_atual + (salario_atual * 0.20);
        printf("Voce nao tem direito a bonus\n");
    } else if((salario_atual > 1000.00 && salario_atual <= 1500.00) && tempo_servico < 1){
        reajuste = salario_atual + (salario_atual * 0.15);
        printf("Voce nao tem direito a bonus\n")
    } else if((salario_atual > 1500.00 && salario_atual <= 2000.00) && tempo_servico < 1){
        reajuste = salario_atual + (salario_atual * 0.10);
        printf("Voce nao tem direito a bonus\n");
    } else if(salario_atual > 2000.00 && tempo_servico < 1){
        printf("Voce nao tem direito a rejuste\n");
        printf("Voce nao tem direito a bonus\n");
    } else if(salario_atual <= 500.00 && (tempo_servico > 1 && tempo_servico <= 3)){
        reajuste = salario_atual + (salario_atual * 0.25);
        bonus = 100.00;
    } else if((salario_atual > 500.00 && salario_atual <= 1000.00) && (tempo_servico > 1 && tempo_servico <= 3)){
        reajuste = salario_atual + (salario_atual * 0.20);
        bonus = 100.00;
    } else if((salario_atual > 1000.00 && salario_atual <= 1500.00) && (tempo_servico > 1 && tempo_servico <= 3)){
        reajuste = salario_atual + (salario_atual * 0.15);
        bonus = 100.00;
    } else if((salario_atual > 1500.00 && salario_atual <= 2000.00) && (tempo_servico > 1 && tempo_servico <= 3)){
        reajuste = salario_atual + (salario_atual * 0.10);
        bonus = 100.00;
    } else if(salario_atual > 2000.00 && (tempo_servico > 1 && tempo_servico <= 3)){
        printf("Voce nao tem direito a reajuste\n");
        bonus = 100.00;
    }



    //dados de saida

    return 0;
}
