#include <stdio.h>

int main(){

    //variaveis
    int notas_alunos, media_alunos=0;
    int i, j, k;
    int tam=5;
    int vet[tam];

    //dados de entrada e processamento
    for(j=0; j<5; j++){

        for(i=0; i<4; i++){
            printf("Insira uma nota: \n");
            scanf("%d", &notas_alunos);
            media_alunos = media_alunos + notas_alunos;
        }

        media_alunos = media_alunos + notas_alunos;
        vet[j] = media_alunos;
    }

    if(vet[k]>=7){
        printf("")
    }

    printf("")
    return 0;
}
