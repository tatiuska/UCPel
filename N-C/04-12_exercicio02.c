//calculadora
#include <stdio.h>
#include <stdlib.h>

int main(){

    int n1, n2, resultado, escolha;

    printf("Insira o primeiro numero: \n");
    scanf("%d", &n1);

    printf("Insira o segundo numero: \n");
    scanf("%d", &n2);

    printf("Escolha a operacao desejada: \n 1 - Soma\n 2 - Subtracao\n 3 - Divisao\n 4 - Multiplicacao \n");
    scanf("%d", &escolha);

    switch(escolha){
    case 1:
        resultado = n1 + n2;
    break;
    case 2:
        resultado = n1 - n2;
    break;
    case 3:
        resultado = n1 / n2;
    break;
    case 4:
        resultado = n1 * n2;
    break;
    default:
        printf("Você nao digitou um valor valido!! \n");
    break;
    }

    printf("O resultado da operacao e: \n %d", resultado);
    return 0;
}
