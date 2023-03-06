#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define materiais 3
#define precos 2

main() {
    int posicao_material = 0, posicao_preco = 0;
    float matriz[materiais][precos], vetor[materiais], valor_digitado = 0.0, media_preco = 0.0;

    for(posicao_material=0; posicao_material<materiais; posicao_material++) {
        media_preco = 0.0;
        for(posicao_preco=0; posicao_preco<precos; posicao_preco++) {
            printf("Insira o preco da posicao |%2d||%2d|:", posicao_material, posicao_preco);
            scanf("%f", &valor_digitado);
            matriz[posicao_material][posicao_preco] = valor_digitado;
            media_preco += matriz[posicao_material][posicao_preco];
        }
        vetor[posicao_material] = media_preco / precos;
    }

    printf("\nA tabela de precos contem os seguintes elementos: \n");
    for(posicao_material=0; posicao_material<materiais; posicao_material++) {
        for(posicao_preco=0; posicao_preco<precos; posicao_material++) {
            printf("|%3.2f", matriz[posicao_material][posicao_preco]);
        }
        printf("|\n");
    }

    printf("\nA media de preco dos produtos e: \n| ");
    for(posicao_material=0; posicao_material<materiais; posicao_material++) {
        printf("%3.2f | ", vetor[posicao_material]);
    }
}
