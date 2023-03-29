/* Capítulo do livro sobre pilhas - com erros */
#include <stdio.h>

/* Criando uma pilha dinâmica */
Pi = cria_Pilha();
Pilha* cria_Pilha();
Pilha* cria_Pilha(){
    Pilha* pi = (Pilha*) malloc(sizeof(Pilha));
    if(pi != NULL)
        *pi = NULL;
    return pi;
}

/* Liberando a pilha */
libera_Pilha(pi);
void libera_Pilha(Pilha* pi);
void libera_Pilha(Pilha* pi) {
    if(pi != NULL) {
        Elem* no;
        while((*pi) != NULL){
            no = *pi;
            *pi = (*pi) -> prox;
            free(no);
        }

        free(pi);

    }
}

/* Inserção */
int x = insere_Pilha(pi, dados_aluno);
int insere_Pilha(Pilha* pi, struct aluno al);
int insere_Pilha(Pilha* pi, struct aluno al) {
    if(pi == NULL) return 0;
    Elem* no(Elem*) malloc(sizeof(Elem));
    if(no == NULL) return 0;
    no -> dados = al;
    no -> prox = (*pi);
    *pi = no;
    return 1;
}

/* Remoção */
int x = remove_Pilha(pi);
int remove_Pilha(Pilha* pi);
int remove_Pilha(Pilha* pi){
    if(pi == NULL) return 0;
    if((*pi) == NULL) return 0;
    Elem* no = *pi;
    *pi = no -> prox;
    free(no);
    return 1;
}

/* Consulta */
int x = consulta_topo_Pilha(pi, &dados_aluno);
int consulta_topo_Pilha(Pilha* pi, struct aluno *al);
int consulta_topo_Pilha(Pilha* pi, struct aluno *al){
    if(pi == NULL) return 0;
    if((*pi) == NULL) return 0;
    *al = (*pi) -> dados;
    return 1;
}
