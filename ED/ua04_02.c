#include <stdio.h>

int main() {

    int *pointerInt; /* ponteiro para inteiro */
    int a;

    a = 10;

    pointerInt=&a;

    printf("Endereco da variavel a: %p\n", &a);
    printf("Endereco guardado em pointerInt: %p\n", pointerInt);
    printf("Valor armazenado na variavel apontada por pointerInt: %d\n", *pointerInt);
    return 0;

}

