#include <stdio.h>

int main() {
    int valor1;
    int *pValor1;
    char valor2;
    char *pValor2;

    pValor1 = &valor1;
    pValor2 = &valor2;

    printf("Endereco de pValor1 = %d\n", pValor1);
    pValor1++; //vai somar 4 bytes na memoria para essa variavel
    printf("Endereco novo de pValor1 = %d\n", pValor1);

    printf("Endereco de pValor2 = %d\n", pValor2);
    pValor2++; //vai somar 1 byte na memoria para essa variavel
    printf("Endereco novo de pValor2 = %d\n", pValor2);
    //return 0;
}
