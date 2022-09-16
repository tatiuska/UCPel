#include <stdio.h>
#include <stdbool.h>

int main() 
{
    //variáveis
    float taxa, livro, disponivel, convertido;
    bool resposta;

    //entrada de dados
    printf("Qual o valor disponível para comprar em Reais?\n");
    scanf("%f", &disponivel);
    printf("Qual o valor do livro em Dólares?\n");
    scanf("%d", &livro);
    printf("Qual a taxa atual de conversão Dólar/Real?\n");
    scanf("%f", &taxa);

    //processamento de dados
    convertido = taxa * livro;
    resposta = convertido <= disponivel;

    //saída de dados
    printf("Valor do livro em Dólar: %.2lf\n", livro);
    printf("Valor do livro em Reais: %.2lf\n", convertido);
    printf("Valor disponível: %.2lf\n", disponivel);
    printf("Resposta: %d\n", resposta);

    return 0;
}