#include <stdio.h>

int main() 
{
    float numero1, numero2;
    float soma, subtracao, multiplicacao, divisao;

    printf("*** Calculadora Modelo 2 ***\n");
    printf("Digite o primeiro número: ");
    scanf("%f", &numero1);

    printf("Digite o segundo número: ");
    scanf("%f", &numero2);

    soma = numero1 + numero2;
    subtracao = numero1 - numero2;
    multiplicacao = numero1 * numero2;
    divisao = numero1 / numero2;

    printf("Número 1: %.2f\n", numero1);
    printf("Número 2: %.2f\n", numero2);
    printf("Soma: %f\n", soma);
    printf("Subtração: %.2f\n", subtracao);
    printf("Multiplicação: %.2f\n", multiplicacao);
    printf("Divisão: %.2f\n", divisao);

    return 0;
}