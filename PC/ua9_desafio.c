#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    //Pedra ganha da tesoura (amassando-a ou quebrando-a).
    //Tesoura ganha do papel (cortando-o).
    //Papel ganha da tesoura (embrulhando-a).

    int computador, jogador;
    printf("\n***Bem-vindo ao Pedra-papel-tesoura***\n");
    printf("Voce jogara contra o computador....");
    printf("Escolha sua jogada: \n");
    printf("1 - Tesoura\n");
    printf("2 - Papel\n");
    printf("3 - Pedra\n");
    printf("Sua jogada: ");

    scanf("%d", &jogador);

    srand(time(NULL));
        computador = 1 + (rand() %3);

    printf("O computador jogou: %d\n", computador);
        if(jogador<1 || jogador>3) {
            printf("Jogada invalida!!\n");
        }
        else{
            if(jogador == computador) {
                printf("Empate!!\n");
            }
            else{
                if(jogador == 1 && computador == 2) {
                    printf("Voce venceu! \n");
                }
                if(jogador == 1 && computador == 3) {
                    printf("Voce perdeu! \n");
                }
                if(jogador == 2 && computador == 1) {
                    printf("Voce perdeu! \n");
                }
                if(jogador == 2 && computador == 3) {
                    printf("Voce ganhou! \n");
                }
                if(jogador == 3 && computador == 2) {
                    printf("Voce perdeu! \n");
                }
                if(jogador == 3 && computador == 1) {
                    printf("Voce ganhou! \n");
                }
            }
        }

    printf("Fim do jogo!!! \n");
    return 0;

}
