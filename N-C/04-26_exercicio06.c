#include <stdio.h>

//programa para ler o salario atual do funcionario, o tempo de trabalho do funcionario na empresa.
//calcular o salario reajustado e imprimir o valor reajustado, ou uma mensagem caso o funcionario nao tenha direito a um aumento.
int main(){

    //variaveis
    float salario_atual, salario_final, reajuste, bonus;
    int tempo_servico;

    //dados de entrada
    printf("Informe seu salario atual: \n");
    scanf("%f", &salario_atual);

    printf("Informe ha quantos anos voce trabalha na empresa (digite 0 para menos de um ano): \n");
    scanf("%d", &tempo_servico);

    //processamento
    //estrutura condicional para calculo do reajuste de salario
    if(salario_atual <= 500.00){
        reajuste = salario_atual + (salario_atual * 0.25);
    } else if(salario_atual >= 501.00 && salario_atual <= 1000.00){
        reajuste = salario_atual + (salario_atual * 0.20);
    } else if(salario_atual >= 1001.00 && salario_atual <= 1500.00){
        reajuste = salario_atual + (salario_atual * 0.15);
    } else if(salario_atual >= 1501.00 && salario_atual <= 2000.00){
        reajuste = salario_atual + (salario_atual * 0.10);
    } else if (salario_atual > 2000.00){
        printf("Voce nao tem direito a reajuste.\n");
    };

    //estrutura condicional para calculo de bonus
    if(tempo_servico < 1){
        printf("Voce nao tem direito a bonus.\n");
    } else if(tempo_servico >= 1 && tempo_servico <= 3){
        bonus = 100.00;
    } else if(tempo_servico >= 4 && tempo_servico <= 6){
        bonus = 200.00;
    } else if(tempo_servico >= 7 && tempo_servico <= 10){
        bonus = 300.00;
    } else if(tempo_servico > 10){
        bonus = 500.00;
    }

    //estrutura condicional para o calculo do salario final
    if(salario_atual > 2000.00 || tempo_servico > 10){
        salario_final = salario_atual + bonus;
    } else {
        salario_final = reajuste + bonus;
    }

    //dados de saida
    printf("Seu salario final: %.2f", salario_final);

    return 0;
}
