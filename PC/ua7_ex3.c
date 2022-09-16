#include <stdio.h>

int main()
{
    int idade;
    int anoAtual;
    int anoNascimento;

    printf("Digite sua idade: ");
    scanf("%d", &idade);
    printf("Digite o ano atual: ");
    scanf("%d", &anoAtual);
    anoNascimento = anoAtual - idade;

    printf("Oi, você nasceu em %d\n", anoNascimento);

    return 0;
}