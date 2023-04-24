#include <stdio.h>
#include <string.h>

//programa para calculo de reajuste de preco
int main(){

    //variaveis
    float p_antigo, p_novo;
    char mensagem[15];


    //dados de entrada
    printf("Digite o preco antigo do produto: \n");
    scanf("%f", &p_antigo);


    //processamento
    //estrutura condicional para o calculo do reajuste
    if(p_antigo <= 50.00){
        p_novo = p_antigo + (p_antigo * 0.05);
    } else if(p_antigo > 50.00 && p_antigo <= 100.00){
        p_novo = p_antigo + (p_antigo * 0.10);
    } else if(p_antigo > 100.00){
        p_novo = p_antigo + (p_antigo * 0.15);
    };

    //estrutura condicional para mensagem do reajuste
    if(p_novo <= 80.00){
        strcpy(mensagem, "Barato");
    } else if(p_novo > 80.00 && p_novo <= 120.00){
        strcpy(mensagem, "Normal");
    } else if(p_novo > 120.00 && p_novo <= 200.00){
        strcpy(mensagem, "Caro");
    } else if(p_novo > 200.00){
        strcpy(mensagem, "Muito caro");
    };

    //dados de saida
    printf("O preco novo do produto eh: R$ %.2f. %s!\n", p_novo, mensagem);


    return 0;
}
