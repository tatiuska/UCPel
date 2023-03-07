#include <stdio.h>

main() {
    int qtd_alunos = 1250;
    int *pQtd_alunos = NULL;
    pQtd_alunos = &qtd_alunos;

    printf("A variavel idade vale %d.\n", qtd_alunos);
    printf("O ponteiro acessando o valor da variavel vale %d.\n", *pQtd_alunos);
    printf("O ponteiro acessando o endereco da variavel vale %d", pQtd_alunos);
}
