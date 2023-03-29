#include <stdio.h>
#include <stdlib.h>

int main() {

    int *v;
    int i, num_componentes;

    printf("Informe o numero de componentes do vetor: \n");
    scanf("%d", &num_componentes);

    v = (int*) malloc(num_componentes * sizeof(int));

    for(i=0; i < num_componentes; i++) {
        scanf("%d", v + 1);
    }

    return 0;
}

/* no exercicio, no inicio da linha 12 (e resposta da questao), e na linha 15, onde se le v, estava ptr */
