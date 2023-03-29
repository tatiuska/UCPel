#include <stdio.h>
#include <stdlib.h>

void main() {

    int a, *b;
    a = 15;
    b = a;
    printf("Valor de p: %d.\n", *b);

    return 0;

}

/* o código esta errado, pois nao e possivel atribuir a um ponteiro o valor de uma variavel, apenas seu endereco,
cuja sintaxe seria b = &a */
