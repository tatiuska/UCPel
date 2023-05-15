#include <stdio.h>
#include <stdlib.h>

//ler a idade de um numero indeterminado de pessoas, sendo 0 indicador do fim da leitura
//calcular numero total de pessoas, idade media do grupo, menor e maior idade do grupo
int main(){

    //variaveis
    int idade, menor_idade, maior_idade;
    int total_pessoas = 0, media_idade = 0;
    int leitura = 1;

    //dados de entrada e processamento
    do {
        printf("Informe sua idade: \n");
        scanf("%d", &idade);

        if (leitura == 1){
            menor_idade = idade;
            maior_idade = idade;
            leitura = 0;
        }

        if(idade > 0){
            if(idade > maior_idade){
            maior_idade = idade;
            }

            if(idade < menor_idade){
            menor_idade = idade;
            }

            total_pessoas = total_pessoas + 1;
        }


    } while(idade != 0);

    media_idade = media_idade + idade;


    //dados de saida
    printf("Numero total de pessoas: %d\n", total_pessoas);
    printf("Idade media do grupo: %d\n", media_idade);
    printf("Menor idade do grupo: %d\n", menor_idade);
    printf("Maior idade do grupo: %d\n", maior_idade);

    return 0;
}
