#include <stdio.h>
int main(){
    int i, n, resultado = 0;
    printf("\nDigite um numero inteiro positivo: ");
    scanf("%d", &n);
    for (i=0; i<=n; i++);
        resultado = resultado + i;
    printf("\nResultado da soma: %d", resultado);
    return 0;
}
