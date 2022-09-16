#include <stdio.h>

/* Contador de números pares, operação convencional 
int main() {
    int contador;
    contador = 0;
    printf("%d\n", contador);
    contador = contador + 2;
    printf("%d\n", contador);
    contador = contador + 2;
    printf("%d\n", contador);
    contador = contador + 2;
    printf("%d\n", contador);
    contador = contador + 2;
    printf("%d\n", contador);
    contador = contador + 2;
    printf("%d\n", contador);
    return 0;
} */

// Contador de números pares usando o incremento +=2
int main() {
    int contador;
    contador = 0;
    printf("%d\n", contador);
    printf("%d\n", contador+=2);
    printf("%d\n", contador+=2);
    printf("%d\n", contador+=2);
    printf("%d\n", contador+=2);
    printf("%d\n", contador+=2);
    return 0;
}