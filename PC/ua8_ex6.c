#include <stdio.h>

int main() {
    int i, i2;
    i = 10;

    /* incremento */
    printf("Valor de i: %d\n", i);
    printf("Valor de i, pré-incremento: %d\n", ++i);
    printf("Valor de i, pós-incremento: %d\n", i++);
    printf("Valor de i: %d\n", i);

    /* decremento */
    i2 = 20;
    printf("Valor de i2: %d\n", i);
    printf("Valor de i2, pré-decremento: %d\n", --i2);
    printf("Valor de i2, pós-incremento: %d\n", i2--);
    printf("Valor de i2: %d\n", i2);

    return 0;
}