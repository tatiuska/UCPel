#include <stdio.h>
int main()
{
    int chute, sorteado;
    printf("************************************\n");
    printf("* Bem-vindo ao Jogo de Advinhacao! *\n");
    printf("************************************\n");

    printf("Digite um numero: \n");
    scanf("%d", &chute);
    sorteado = 42;

    if(chute == sorteado) {
        printf("Voce acertou!!!\n");
    }
    else{
        if(chute < sorteado) {
            printf("Voce perdeu!! Seu chute %d eh menor que o sorteado.\n", chute);
        }
        else{
            printf("Voce perdeu!! Seu chute %d eh maior que o sorteado.\n", chute);
        }
    }

    printf("*************Game over**************\n");
    return 0;
}
