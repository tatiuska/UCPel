// Crie um programa em C que represente uma calculadora através da leitura de dados do teclado.
#include <stdio.h>

int main(){

    // variáveis
    int numero1, numero2, resultado = 0, escolha;

    // solicitando o primeiro número
    printf("Insira o primeiro numero:  \n");
    scanf("%d", &numero1);

    // solicitando o segundo número
    printf("Insira o segundo numero:  \n");
    scanf("%d", &numero2);

    // solicitando a escolha da operação
    printf("Escolha a operacao desejada: \n 1 - Soma\n 2 - Subtracao\n 3 - Divisao\n 4 - Multiplicacao \n");
    scanf("%d", &escolha);

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
    default:
        printf("Voce nao digitou um valor valido!! \n");
    break;
    }

    // impressão do resultado
    printf("O resultado da operacao e: \n %d", resultado);
    return 0;
}
