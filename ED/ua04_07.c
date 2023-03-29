#include <stdio.h>

const int MAX = 3;

int main() {

    int var[] = {5, 10, 15};
    int i, *ptr;

    /* ptr aponta para o ultimo endereco do vetor */
    ptr = &var[MAX-1];

    for(i=MAX; i>0; i--) {
        printf("Endereco de var[%d] = %p\n", i-1, ptr);
        printf("Valor de var[%d] = %d\n", i-1, *ptr);

        /* decrementando o vetor */
        ptr--;
    }

    return 0;
}
