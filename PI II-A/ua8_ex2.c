#include <stdio.h>

int main() {
    int numero1, numero2;
    int soma, subtracao, multiplicacao, divisao;

    printf("*** Calculadora Modelo 1 ***\n");
    printf("Digite o primeiro numero: ");
    scanf("%d", &numero1);

    printf("Digite o segundo numero: ");
    scanf("%d", &numero2);

    soma = numero1 + numero2;
    subtracao = numero1 - numero2;
    multiplicacao = numero1 * numero2;
    divisao = numero1 / numero2;

    printf("Numero 1: %d\n", numero1);
    printf("Numero 2: %d\n", numero2);
    printf("Soma: %d\n", soma);
    printf("Subtracao: %d\n", subtracao);
    printf("Multiplicacao: %d\n", multiplicacao);
    printf("Divisao: %d\n", divisao);

    return 0;
}
