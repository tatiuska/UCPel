#include <stdio.h>

int main()
{
    int filme, quantIngressos;
    float valorCompra;
    filme = 0;
    quantIngressos = 0;
    valorCompra = 0;

    printf("Ola, bem-vindo ao sistema de calculo de compra de ingressos. O valor do ingresso e R$ 12,50.\n");
    printf("Escolha a opcao de filme:\n");
    printf("Digite 1: Vingadores 4\n");
    printf("Digite 2: Como Treinar o Seu Dragao 3\n");
    printf("Digite 3: Dumbo\n");
    printf("Digite 4: Shazam!\n");
    scanf("%d", &filme);

    printf("Informe a quantidade de ingressos:\n");
    scanf("%d", &quantIngressos);
    valorCompra = quantIngressos * 12.50;
    printf("Obrigada. Para comprar %d ingresso(s) para o filme numero %d voce ira gastar %.2f", quantIngressos, filme, valorCompra);

    return 0;
}

