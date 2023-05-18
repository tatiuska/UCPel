#include <stdio.h>

int main(){

    //variaveis
    int numero, numero_inverso, restante_numero, numero_original;

    //dados de entrada
    printf("Digite um numero inteiro de quatro digitos: \n");
    scanf("%d", &numero);

    //inicializacao de variaveis
    numero_original = numero;
    numero_inverso = 0;

    //processamento
    while(numero != 0){
        restante_numero = numero % 10;
        numero_inverso = (numero_inverso * 10) + restante_numero;
        numero = numero / 10;
    }

    //processamento e dados de saída
    if(numero_original == numero_inverso){
        printf("O numero %d eh um palindromo.\n", numero_original);
    } else {
        printf("O numero %d nao eh um palindromo.\n", numero_original);
    }

    return 0;
}
