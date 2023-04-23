#include <stdio.h>
#include <math.h>
#include <stdio.h>
#include <string.h>

//programa para ler o codigo de comida e bebida de um cardapio e a quantidade de cada um.
//calcular o valor a ser pago pelo cliente.

int main(){

    //variaveis
    int cod_c, cod_b, qt_c, qt_b;
    char comida[30], bebida[30];
    float preco_c, preco_b, preco_final;


    //dados de entrada
    printf("Digite o codigo da comida que deseja: \n100 - Cachorro Quente \n101 - Bauru Simples \n102 - Bauru com Ovo \n103 - Hamburguer \n104 - Cheeseburguer \n\n");
    scanf("%d", &cod_c);

    printf("Escolha a quantidade da comida escolhida: \n\n");
    scanf("%d", &qt_c);

    printf("Digite o codigo da bebida que deseja: \n105 - Suco \n106 - Refrigerante\n\n");
    scanf("%d", &cod_b);

    printf("Escolha a quantidade da bebida escolhida: \n\n");
    scanf("%d", &qt_b);

    //processamento
    //switch/case para escolha da comida
    switch(cod_c){
    case 100:
        strcpy(comida, "Cachorro Quente");
        preco_c = 1.20 * qt_c;
    break;
    case 101:
        strcpy(comida, "Bauru Simples");
        preco_c = 1.30 * qt_c;
    break;
    case 102:
        strcpy(comida, "Bauru com Ovo");
        preco_c = 1.50 * qt_c;
    break;
    case 103:
        strcpy(comida, "Hamburguer");
        preco_c = 1.20 * qt_c;
    break;
    case 104:
        strcpy(comida, "Cheeseburguer");
        preco_c = 1.70 * qt_c;
    break;
    default:
        printf("Codigo invalido!!\n\n");
    };

    //switch/case para escolha da bebida (poderia ter mantido um if/else).
    switch(cod_b){
    case 105:
        strcpy(bebida, "Suco");
        preco_b = 2.20 * qt_b;
    break;
    case 106:
        strcpy(bebida, "Refrigerante");
        preco_b = 1.00 * qt_b;
    break;
    default:
        printf("Codigo invalido!\n\n");
    };

    //calculo do preco a pagar
    preco_final = preco_c + preco_b;


    //dados de saida
    printf("Seu pedido: %s (%d), %s (%d)\n", comida, qt_c, bebida, qt_b);
    printf("Valor a ser pago: R$ %.2f\n", preco_final);

    return 0;
}
