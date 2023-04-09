#include <stdio.h>

void listar() {

    int it; cabec();

    printf("\nListagem de alunos da fila");
    if(tamfila != 0) {
        printf("\nMatricula Nome Polo\n");
        printf("---------------------------------------------------------\n");

        for(i=0; i<tamfila; i++)
            printf("%4d %-15s %2d\n", Aluno[i].Matricula, Aluno[i].Nome, Aluno[i].Polo);
        printf("---------------------------------------------------------\n");
        printf("\n\nQuantidade de alunos na fila = %d\n", tamfila);
    }

    else
        printf("\n\nNão tem nenhum aluno na fila");
    printf("\n\n\nTecle enter para voltar para o menu\n");
    getche();
}
