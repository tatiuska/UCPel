#include <stdio.h>

int main() 
{
    int numero, resto;
    printf("Digite o número: ");
    scanf("%d", &numero);
    resto = numero % 2;
    printf("Resto da divisão: %d\n", resto);
    return 0;
}