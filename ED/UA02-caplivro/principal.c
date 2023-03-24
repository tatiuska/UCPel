#include "conjunto.c"

main() {
    //Define, cria, inicializa e insere elementos nos 2 conjuntos
    //O conjunto C fica vazio, pois recebe o resultado das operações
    Conjunto c1, c2, c3;

    criar(&c1, 'A');
    inicializar(&c1);
    inserir(&c1, 3);
    inserir(&c1, 7);
    inserir(&c1, 6);

    criar(&c2, 'B');
    inicializar(&c2);
    inserir(&c2, 1);
    inserir(&c2, 6);
    inserir(&c2, 3);
    inserir(&c2, 4);

    criar(&c3, 'C');
    inicializar(&c3);

    printf("Conjuntos iniciais: \n");
    imprimir(&c1);
    imprimir(&c2);
    imprimit(&c3);

    remover(&c2, 1);
    printf("\nConjunto B sem o elemento 1: \n");
    imprimir(&c2);

    inserir(&c2, 1);
    printf("\nConjunto B novamente com o elemento 1: \n");
    imprimir(&c2);

    inicializar(&c3);
    interseccao(&c1, &c2, &c3);
    imprimir(&c3);

    inicializar(&c3);
    uniao(&c1, &c2, &c3);
    imprimir(&c3);

    busca(&c1, 7);
}
