#include <stdio.h>

int main() {

    int* pc;
    int c;
    c = 22;
    printf("Endereco de c: %p\n", &c);
    printf("Valor de c: %d\n\n", c);

    pc=&c;
    printf("Endereco apontado por pc: %p\n", pc);
    printf("Conteudo da variavel apontada por pc: %d\n\n", *pc);

    c = 11;
    printf("Endereco apontado por pc: %p\n", pc);
    printf("Conteudo do ponteiro pc: %d\n\n", *pc);

    *pc=2;
    printf("Endereco da variavel c: %p\n", &c);
    printf("Valor armazenado em c: %d\n\n", c);

    return 0;

}
