#include <stdio.h>

int main() {
    int numero;
    printf("Digite um numero: ");
    scanf("%d", &numero);

    if(numero > 0) {
        printf("O numero eh maior do que 0. \n");
    }
    else{
        printf("O numero eh menor do que 0.\n");
    }

    return 0;
}
