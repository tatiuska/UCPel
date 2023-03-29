/* Código do capítulo do livro sobre pilhas, está cheio de erros */
#include <stdio.h>
#include <stdlib.h>

struct aluno {

    int matricula;
    char nome[30];
    float n1, n2, n3;

};

typedef struct pilha Pilha;
struct pilha {

    int qtd;
    struct aluno dados [MAX];
};

Pilha *pi;
Pi = cria_Pilha();
Pilha* cria_Pilha() {

    Pilha *pi;
    pi = (Pilha*) malloc(sizeof(struct pilha));
    if(pi != NULL) {
        pi -> qtd = 0;
    }
    return pi;

    void libera_Pilha(pi);
    void libera_Pilha* pi;
    void libera_Pilha (Pilha* pi){

        free(pi);
    }
}

/* Inserção */
int x = insere_Pilha(pi, dados_aluno);
int insere_Pilha(Pilha* pi struct aluno al);
int insere_Pilha(PIlha* pi, struct aluno al) {
    if(pi == NULL) return 0;
    if(Pilha_cheia (pi)) return 0;
    pi -> dados[pi -> qtd] = al;
    pi -> qtd++
    return 1;
}

/* Remoção */
int x = remove_Pilha (pi);
int remove_Pilha (Pilha* pi);
int remove_Pilha (Pilha* pi) {
    if(pi == NULL || pi -> qtd == 0)
        return 0;
    pi -> qtd--;
    return 1;
}

/* Acessar */
int x = consulta_topo Pilha(pi, &dados_aluno);
int Consulta_topo_Pilha(Pilha* pi, struct aluno *al);
int Consulta_topo_Pilha(Pilha* pi, struct aluno *al) {
    if(pi == NULL || pi -> qtd == 0)
        return 0;
    *al = pi -> dados[pi -> qtd-1];
    return 1;
}
