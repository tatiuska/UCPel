#include <stdio.h>
#include <string.h>

int main(){

    //variaveis
    char S1[20];
    char S2[20];
    int repete;
    char letra;
    int menu;
    int i = 0;

    //dados de entrada e processamento
    printf("Insira seu nome: ");
    scanf("%s", &S1);
    printf("Escolha o procedimento: \n1 - Imprimir o tamanho da string \n2 - Comparar strings \n3 - Concatenar strings \n4 - Imprimir a string de forma reversa \n5 - Contar quantas vezes um caractere aparece na string \n");
    scanf("%d", &menu);

    switch(menu){
        case 1:
            printf("Voce digitou %d caracteres.\n", strlen(S1));
        break;

        case 2:
            printf("Insira seu sobrenome: ");
            scanf("%s", &S2);
            printf("Comparacao de S1 com S2: %d\n", strcmp(S1,S2));
        break;

        case 3:
            //concatenar strings
            printf("Insira seu sobrenome: ");
            scanf("%s", &S2);
            strcat(S1, S2);
            printf("S1: %s, S2: %s \n", S1, S2);
        break;

        case 4:
            //imprimir a string de forma reversa
        break;

        case 5:
            //contar quantas vezes um caractere aparece na string, o caractere deve ser informado pelo usuario
            printf("Informe o caractere: \n");
            scanf("%c", &letra);
            while(letra == S1[i]){
                letra = letra + 1;
            }
            printf("O caractere %c repete %d vezes.\n", letra, repete);

        break;
    }


    return 0;
}

