#include <stdio.h>
#include <stdlib.h>
#include <string.h>

//programa que le uma nota, o numero de faltas de um aluno, e escreve seu conceito.
//caso o aluno tenha mais do que 20 faltas, ha uma reducao no conceito.
//optei por imprimir a nota e o numero de faltas, junto com o conceito nos dados de saida.

int main(){

    //variaveis
    float nota;
    int faltas;
    char conceito;

    //Dados de Entrada
    printf("Informe sua nota: \n");
    scanf("%f", &nota);

    printf("Informe seu numero de faltas: \n");
    scanf("%d", &faltas);

    //Processamento e dados de saída
    //Estrutura condicional para o caso do aluno ter até 20 faltas
    if(faltas <= 20 && (nota > 9.0 && nota <= 10.0)){
        conceito = 'A';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas <= 20 && (nota > 7.5 && nota <= 8.9)){
        conceito = 'B';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas <= 20 && (nota > 5.0 && nota <= 7.4)){
        conceito = 'C';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas <= 20 && (nota > 4.0 && nota <= 4.9)){
        conceito = 'D';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas <= 20 && (nota >= 0.0 && nota <= 3.9)){
        conceito = 'E';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas > 20 && (nota > 9.0 && nota <= 10.0)){  //aqui começam os casos para mais de 20 faltas.
        conceito = 'B';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas > 20 && (nota > 7.5 && nota <= 8.9)){
        conceito = 'C';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas > 20 && (nota > 5.0 && nota <= 7.4)){
        conceito = 'D';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas > 20 && (nota > 4.0 && nota <= 4.9)){
        conceito = 'E';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else if(faltas > 20 && (nota >= 0.0 && nota <= 3.9)){
        conceito = 'E';
        printf("Sua nota: %.1f \nSuas faltas: %d \nSeu conceito final: %c\n", nota, faltas, conceito);
    } else {
        printf("Informe uma nota valida!");
    };

    return 0;

}
