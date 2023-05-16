#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//programa para verificar se um numero de quatro digitos eh um palindromo
//USAR FUNCAO STRCMP - e fazer vetores para receber os numeros digitados e para inverter o numero, e entao comparar
int main(){

    //variaveis
    int num[10];
    int rev[10];


    //dados de entrada
    printf("Digite um numero inteiro de quatro digitos: \n");
    scanf("%d", &num);

    //processamento e dados de saida
    while(num != 0){
        num_reverso = num % 10;
        inv = (inv * 10) + num_reverso;
        num = num / 10;
    }

    if(num_reverso == inv){
        printf("%d eh um numero palindromo.\n", num);
    } else {
        printf("%d nao eh um numero palindromo.\n", num);
    }

    return 0;
}
