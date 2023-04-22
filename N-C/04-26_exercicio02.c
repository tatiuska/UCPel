#include <stdio.h>

//programa que le o nivel de um professor e a quantidade de horas-aula ministrada para calculo do salario

int main(){

    //variáveis
    int nivel, hora_aula;
    float salario;

    //dados de entrada
    printf("Informe seu Nivel: \n1 - Nivel 1 \n2 - Nivel 2 \n3 - Nivel 3 \n");
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


