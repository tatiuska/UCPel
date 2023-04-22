#include <stdio.h>
#include <math.h>
#include <stdio.h>
#include <string.h>

//arrumar a parte do char e do if referente a isso

int main(){

    //variaveis
    int cod_c, cod_b, qt_c, qt_b;
    char comida[30], bebida[30];
    float preco_c, preco_b, preco_final;


    //dados de entrada
    printf("Digite o codigo da comida e a quantidade: \n100 - Cachorro Quente \n101 - Bauru Simples \n102 - Bauru com Ovo \n103 - Hamburguer \n104 - Cheeseburguer \n");
    scanf("%d %d", &cod_c, &qt_c);

    printf("Digite o codigo da bebida e a quantidade: \n105 - Suco \n106 - Refrigerante\n");
    scanf("%d %d", &cod_b, &qt_b);

    //processamento
    if(cod_c = 100){
        comida = 'Cachorro Quente';
        preco_c = 1.20 * qt_c;
    } else if(cod_c = 101){
        comida = getchar();
        preco_c = 1.30 * qt_c;
        } else if(cod_c = 102){
            comida = 'Bauru com Ovo';
            preco_c = 1.50 * qt_c;
            } else if(cod_c = 103){
                comida = 'Hamburguer';
                preco_c = 1.20 * qt_c;
                } else if(cod_c = 104){
                    comida = 'Cheeseburguer';
                    preco_c = 1.70 * qt_c;
                    } else{
                        printf("Digite um codigo valido!!");
                        }

    if(cod_b = 105){
        bebida = 'Suco';
        preco_b = 2.20 * qt_b;
    } else if(cod_b = 106){
        bebida = 'Refrigerante';
        preco_b = 1.00 * qt_b;
        } else {
            printf("Digite um codigo valido!!");
            }

    preco_final = preco_c + preco_b;


    //dados de saida
    printf("Seu pedido eh: %c(%d), %c(%d) e o valor a ser pago eh: R$ %.2f\n", comida, qt_c, bebida, qt_b, preco_final);

    return 0;
}
