#include <stdio.h>
#include <string.h>

int main()
{
    char nome[100];
    int idade; //declarando uma variável do tipo inteiro cujo nome é idade
    idade = 0; //inicializando a variável com o valor 0

    printf("Digite seu nome: ");
    scanf("%s", &nome);
    printf("Digite sua idade: ");
    scanf("%d", &idade);

    printf("\n%s tem %d anos.\n", nome, idade);

    return 0;
}
