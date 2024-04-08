// Crie um programa em C para realizar a soma de dois números através da leitura de dados do teclado.
#include <stdio.h>

int main() {

    // variáveis
    int num1, num2, resultado;

    // solicitando o primeiro número da soma
    printf("Insira o primeiro numero: \n");
    scanf("%d", &num1);

    // solicitando o segundo número da soma
    printf("Insira o segundo numero: \n");
    scanf("%d", &num2);

    // cálculo da soma
    resultado = num1 + num2;

    // impressão do resultado
    printf("O resultado da soma e: %d\n", resultado);

    return 0;

}
