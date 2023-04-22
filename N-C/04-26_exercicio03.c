#include <stdio.h>
#include <math.h>
#include <string.h>

//programa que le a altura e o peso de uma pessoa e mostre uma classificacao de acordo com uma tabela
int main(){

    //variaveis
    int altura;
    float peso;
    char classificacao;

    //dados de entrada
    printf("Informe sua altura (em cm): \n");
    scanf("%d", &altura);

    printf("Informe seu peso (em kg): \n");
    scanf("%f", &peso);

    //processamento
    if(altura < 120 && peso <= 60) {
        classificacao = 'A';
    } else if((altura > 120 && altura <= 170) && (peso <= 60)){
        classificacao = 'B';
        } else if(altura > 170 && peso <= 60){
            classificacao = 'C';
            } else if((altura < 120) && (peso > 60 && peso <= 90)){
                classificacao = 'D';
                } else if((altura > 120 && altura <= 170) && (peso > 60 && peso <= 90)){
                    classificacao = 'E';
                    } else if((altura > 170) && (peso > 60 && peso <= 90)){
                        classificacao = 'F';
                        } else if(altura < 120 && peso > 90){
                            classificacao = 'G';
                            } else if((altura > 120 && altura <= 170) && (peso > 90)){
                                classificacao = 'H';
                                } else if(altura > 170 && peso > 90){
                                    classificacao = 'I';}

    //dados de saida
    printf("Sua altura eh %dcm, seu peso eh %.2fkg e sua classificacao eh %c.\n", altura, peso, classificacao);

    return 0;
}
