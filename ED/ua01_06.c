#include <stdio.h>

#define numeroDeAlunos 4 //solucao de comentario no video, pois estava dando erro na hora de compilar
#define bimestresAnuais 4 //"error: variable-sized object may not be initialized"

int main(void) {

    //const int bimestresAnuais = 4;  //essas duas variaveis nao sao necessarias para criar o programa,
    //const int numeroDeAlunos = 4;   //foram inseridas para melhor ilustrar a situacao.

    float notasAlunos[numeroDeAlunos][bimestresAnuais] = {0};
    float mediasAlunos[numeroDeAlunos] = {0};
    float media = 0;

    printf("Insira as 4 notas do aluno 1:\n");
    for(int aluno = 0; aluno < numeroDeAlunos; aluno++) {
        for(int notas = 0; notas < bimestresAnuais; notas++) {
            scanf("%f", &notasAlunos[aluno][notas]);
            media += notasAlunos[aluno][notas];
        }
        mediasAlunos[aluno] = media / bimestresAnuais;
        media = 0;  //zerando a variavel media para que nao se some a media de todos os alunos.
        printf("Insira as 4 notas do aluno %i:\n\n", aluno + 2);
    }

    for(int aluno = 0; aluno < numeroDeAlunos; aluno++) {
        printf("A media do aluno %i e %.2f\n", aluno +1, mediasAlunos[aluno]);
    }

    return 0;
}
