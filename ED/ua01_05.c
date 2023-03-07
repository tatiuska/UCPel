#include <stdio.h>

int main() {
    int valor1;
    int *pValor1;
    char valor2;
    char *pValor2;

    pValor1 = &valor1;
    pValor2 = &valor2;

    printf("Endereco de pValor1 = %d\n", pValor1);
    pValor1++; //irá somar 4 bytes na memória para essa variável
    printf("Endereco novo de pValor1 = %d\n", pValor1);

    printf("Endereco de pValor2 = %d\n", pValor2);
    pValor2++; //irá somar 1 byte na memória para essa variável
    printf("Endereco novo de pValor2 = %d\n", pValor2);
    //return 0;
}
