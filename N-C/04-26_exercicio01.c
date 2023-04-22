#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//finalizar
int main(){

    //variaveis
    float nota_inicial, nota_final;
    int faltas;
    char conceito;

    //Dados de Entrada
    printf("Informe sua nota: \n");
    scanf("%f", &nota_inicial);

    printf("Informe seu numero de faltas: \n");
    scanf("%d", &faltas);

    //Processamento e dados de saída
    if(faltas < 20 && (nota_inicial > 9.0 && nota_inicial <= 10)){
        conceito = 'A';
    } else if(faltas < 20 && (nota_inicial > 7.5 && nota_inicial <= 8.9)){
        conceito = 'B';
    } else if(faltas < 20 && (nota_inicial > 5.0 && nota_inicial <= 7.4)){
        conceito = 'C';
    } else if(faltas < 20 && (nota_inicial > 4.0 && nota_inicial <= 4.9)){
        conceito = 'D';
    } else if(faltas < 20 && (nota_inicial = 0.0 && nota_inicial <= 3.9)){
        conceito = 'E';
    }

    //continuar
    //esse printf era para testar se as variaveis estavam funcionando, apagar depois.
    printf("Sua nota eh %.2f, voce tem %d faltas e seu conceito final eh: %c", nota_inicial, faltas, conceito);

    return 0;

}
