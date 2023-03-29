/* Exemplos do capítulo do livro sobre listas - códigos incompletos */
/* Implementando uma fila dinamica */
#include <stdio.h>
#include <stdlib.h>

/* Inserindo um elemento na fila */
void inserir(){
    TAluno *novono;

    int i, Matricula1, Polo1, continuar;
    char Nome1[15];
    do{

    }
}

/* Removendo um elemento na fila */
node *retira(node *FILA){
    if(FILA -> prox == NULL){
        printf("Fila ja esta vazia\n");
        return NULL;
    } else {
        node *tmp = FILA -> prox;
        FILA -> prox = tmp -> prox;
        tam--;
        return tmp;
    }
}

/* Consultando um elemento na fila */
void consultaprimeiro(){
    cabec();
    printf("\nConsulta primeiro aluno da fila\n");

    if(tamfila != 0){
        printf("\nMatricula Nome Polo\n");
        printf("-----------------------------------------\n");
        printf("%4d %-15s %2d\n", Aluno[0].Matricula, Aluno[0].Nome, Aluno[0].Polo);
        printf("------------------------------------------\n");
    }
    else {
        printf("\n\nA fila esta vazia!!\n\n");
        printf("\n\nTecle para voltar para o menu\n");
    }
}

/* Listando um elemento na fila */
void listar(){
    int i; cabec();

    printf("\nListagem de alunos na fila\n");
    if(tamfila != 0){
        printf("\nMatricula Nome Polo\n");
        printf("-------------------------------------------\n");
        for(i=0; i<tamfila; i++){
            printf("%4d %-15s %2d\n", Aluno[i].Matricula, Aluno[i].Nome, Aluno[i].Polo);
            printf("-----------------------------------------------\n");
            printf("\n\nQuantidade de alunos na fila = %d\n", tamfila)
        }
        else {
            printf("\n\nNao ha nenhum aluno na fila");
            printf("\n\nTecle Enter para voltar para o menu\n\n", getche());
        }

    }

}
