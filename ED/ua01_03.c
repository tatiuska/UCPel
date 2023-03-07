//exercícios sobre matrizes
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define linhas 4
#define colunas 8

main() {
    int posicao_linha = 0, posicao_coluna = 0, matriz[linhas][colunas], valor = 0, maior = 0;
    for(posicao_linha=0; posicao_linha<linhas; posicao_linha++) {
        for(posicao_coluna=0; posicao_coluna<colunas; posicao_coluna++) {
            valor = posicao_linha + posicao_coluna;
            matriz[posicao_linha][posicao_coluna] = valor;
        }
    }
    printf("A matriz criada contem os seguintes elementos: \n\n");
    for(posicao_linha=0; posicao_linha<linhas; posicao_linha++) {
        for(posicao_coluna=0; posicao_coluna<colunas; posicao_coluna++) {
            printf("| %2d ", matriz[posicao_linha][posicao_coluna]);
        }
        printf("|\n ");
    }
    printf("\n O maior elemento da matriz e: \n\n ");
    for(posicao_linha=0; posicao_linha<linhas; posicao_linha++) {
        for(posicao_coluna=0; posicao_coluna<colunas; posicao_coluna++) {
            if(matriz[posicao_linha][posicao_coluna] > maior) {
                maior = matriz[posicao_linha][posicao_coluna];
            }
        }
    }
    printf("| %d | ", maior);

}
