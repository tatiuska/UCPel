#include <stdio.h>
#include <stdlib.h>

int main() {

    int num, i, *ptr, sum = 0;

    printf("Entre com a quantidade de elementos: ");
    scanf("%d", &num);

    ptr = (int*) malloc(num * sizeof(int)); //alocando espaco de memoria

    if(ptr == NULL) {
        printf("Erro!! Houve um erro na alocacao de memoria.");
        exit(0);
    }

    printf("Digite os elementos do vetor: ");
    for(i = 0; i < num; i++) {
        scanf("%d", ptr + i);
        sum += *(ptr + i);
    }

    printf("Soma = %d", sum);
    free(ptr);
    return 0;
}
