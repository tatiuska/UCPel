/*
 * Modifique o programa em C que representa uma calculadora, para conter os seguintes itens:
 * a) Tratar denominador = 0 na operação de divisão
 * b) Tratar valores fora do intervalo de escolha
 * c) Adicionar o resto na operação da divisão
 * d) Adicionar a operação de exponenciação
 * */
#include <stdio.h>
#include <math.h>

int main(){

    // variáveis
    int escolha;
    double numero1, numero2, resultado = 0;

    // solicitando o primeiro número
    printf("Insira o primeiro numero: \n");
    scanf_s("%lf", &numero1);

    // solicitando o segundo número
    printf("Insira o segundo numero: \n");
    scanf_s("%lf", &numero2);

    // solicitando qual operação desejada
    printf("Escolha a operacao desejada: \n 1 - Soma\n 2 - Subtracao\n 3 - Divisao\n 4 - Multiplicacao \n 5 - Exponenciacao\n");
    scanf_s("%d", &escolha);

    // estrutura condicional - switch/case
    switch(escolha){
    case 1:
        resultado = numero1 + numero2;
        break;
    case 2:
        resultado = numero1 - numero2;
        break;
    case 3:
        resultado = numero1 / numero2;
        break;
    case 4:
        resultado = numero1 * numero2;
        break;
    case 5:
        resultado = pow(numero1, numero2);
        break;
    default:
        printf("Voce nao digitou um valor valido!! \n");
        break;
    }

    // impressão do resultado
    printf("O resultado da operacao e: \n %lf", resultado);
    return 0;
}

