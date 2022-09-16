#include <stdio.h>

int main() {
    int numero1, numero2;
    int soma, subtracao, multiplicacao, divisao;

    printf("*** Calculadora Modelo 1 ***\n");
    printf("Digite o primeiro número: ");
    scanf("%d", numero1);

    printf("Digite o segundo número: ");
    scanf("%d", numero2);

    soma = numero1 + numero2;
    subtracao = numero1 - numero2;
    multiplicacao = numero1 * numero2;
    divisao = numero1 / numero2;

    printf("Número 1: %d\n", numero1);
    printf("Número 2: %d\n", numero2);
    printf("Soma: %d\n", soma);
    printf("Subtração: %d\n", subtracao);
    printf("Multiplicação: %d\n", multiplicacao);
    printf("Divisão: %d\n", divisao);

    return 0;
}