#include <stdio.h>

int main(){

    //variaveis
    int idade, opiniao, med_idade, op_reg, op_bom;

    //inicializacao de variaveis
    med_idade = 0;
    op_reg = 0;
    op_bom = 0;

    //dados de entrada e processamento
    for(int espect = 0; espect < 10; espect++){

        printf("Informe sua idade: \n");
        scanf("%d", &idade);

        printf("O que achou do filme? \n3 - Otimo \n2 - Bom \n1 - Regular\n\n");
        scanf("%d", &opiniao);

        if(opiniao == 3){
            med_idade = med_idade + idade;
        }

        if(opiniao == 1){
            op_reg = op_reg + 1;
        }

        if(opiniao == 2){
            op_bom = op_bom + 1;
        }
    }

    med_idade = med_idade / 3;
    op_bom = (op_bom * 100)/10;

    //dados de saida
    printf("Media de idade de quem respondeu 3 - Otimo: %d \n", med_idade);
    printf("Quantidade de pessoas que respondeu 1 - Regular: %d \n", op_reg);
    printf("Porcentagem de pessoas que respondeu 2 - Bom: %d%% \n", op_bom);

    return 0;
}
