#include <stdio.h>
#include <stdlib.h>

//ler a idade de um numero indeterminado de pessoas, sendo 0 indicador do fim da leitura
//calcular numero total de pessoas, idade media do grupo, menor e maior idade do grupo
int main(){

    //variaveis
    int idade, total_pessoas, media_idade, menor_idade, maior_idade;
    bool leitura = true;

    //dados de entrada e processamento
    do {
        printf("Informe sua idade: \n");
        scanf("%d", &idade);

        if (leitura == true){
            menor_idade = idade;
            maior_idade = idade;
            leitura = false;
        }

        if(idade > maior_idade){

        }
        if(idade > 0){
            total_pessoas = total_pessoas + 1;
        }
    } while(idade != 0);

    media_idade = idade / total_pessoas;


    printf("Numero total de pessoas: %d\n", total_pessoas);
    printf("Idade media do grupo: %d\n", media_idade);
    printf("Menor idade do grupo: %d\n", menor_idade);
    printf("Maior idade do grupo: %d\n", maior idade);




    //processamento



    //dados de saida



    return 0;
}
