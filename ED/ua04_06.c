#include <stdio.h>

const int MAX = 5;

int main() {

    double var[] = {10, 100, 20, 200, 30};
    int i;
    double *ptr;

    ptr = var;

    for(i=0; i<MAX; i++) {
        printf("Endereco var[%d] = %p\n", i, ptr);
        printf("Valor de var[%d] = %.2f\n", i, *ptr);

        /* Incrementando o ponteiro */
        ptr++;
    }

    return 0;

}
