#include <stdio.h>

int main(){

    //variaveis
    int TAM = 10;
    int vetor[TAM];
    int soma = 0;

    //dados de entrada e processamento
    for(int i = 0; i < TAM; i++)
    {
        printf("Insira um numero: \n");
        scanf("%d", &vetor[i]);

        if(vetor[i] < 40){
            soma = soma + vetor[i];
        }
    }

    //dados de saida
    printf("O resultado da soma eh: %d\n", soma);

    return 0;
}
