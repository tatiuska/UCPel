#include <stdio.h>

void insere(node *FILA) {

    node *novo=aloca();
    novo -> prox = NULL;

    if(vazia(FILA))
        FILA -> prox = novo;
    else{
        node *tmp = FILA -> prox;
        while(tmp -> prox != NULL)
            tmp = tmp -> prox;

        tmp -> prox = novo;
    }
    tam++;
}
