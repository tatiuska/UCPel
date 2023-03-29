#include <stdio.h>
#include <stdlib.h>

int main() {

    int *ptr, i, n1, n2;
    printf("Entre com o tamanho do vetor: ");
    scanf("%d", &n1);

    ptr = (int*) malloc(n1 * sizeof(int));

    printf("Usando o espaco alocado\n");
    for(i=0; i<n1; i++) {
        scanf("%d", ptr + i);
    }

    printf("\nEntre com um novo tamanho: ");
    scanf("%d", &n2);
    ptr = realloc(ptr, n2);

    printf("Usando o espaco realocado\n");

    for(i=n1; i<n2; i++) {
        scanf("%d", ptr + i);
    }

    for(i=0; i<n2; i++) {
        printf("%d\t", *(ptr + i));
    }

    return 0;

}
