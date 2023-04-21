#include <stdio.h>
#include <stdlib.h>

int main(){

    //variáveis
    int nivel, hora_aula;
    float salario;

    //dados de entrada
    printf("Informe seu Nivel: \n 1 para Nivel 1\n 2 para Nivel 2\n 3 para Nivel 3\n");
    scanf("%d", &nivel);

    printf("Informe a quantidade de horas/aula trabalhadas: \n");
    scanf("%d", &hora_aula);

    //processamento
    switch(nivel) {

    case 1:
        salario = hora_aula * 12.00;
    break;

    case 2:
        salario = hora_aula * 17.00;
    break;

    case 3:
        salario = hora_aula * 25.00;
    break;

    default:
        printf("Voce nao informou um nivel valido!\n");

    }

    //dados de saída
    printf("Seu Nivel eh %d e seu salario eh de R$ %.2f", nivel, salario);

    return 0;
}


