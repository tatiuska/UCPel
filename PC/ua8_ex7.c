#include <stdio.h>

/* Contador de números usando operadores de atribuição e soma 
int main() {
    int contador;
    contador = 0;
    contador = contador + 1;
    printf("%d\n", contador);
    contador = contador + 1;
    printf("%d\n", contador);
    contador = contador + 1;
    printf("%d\n", contador);
    contador = contador + 1;
    printf("%d\n", contador);
    contador = contador + 1;
    printf("%d\n", contador);
    return 0;
} */

/* Contador de números usando operação de incremento */
int main() {
    int contador;
    contador = 1;
    printf("%d\n", contador++);
    printf("%d\n", contador++);
    printf("%d\n", contador++);
    printf("%d\n", contador++);
    printf("%d\n", contador++);
    return 0;
}