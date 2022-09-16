#include <stdio.h>

int main()
{
    double altura;
    double pesoIdeal;
    printf("Digite sua altura: ");
    scanf("%lf", &altura);
    pesoIdeal = 72.7 * altura - 58;  //linha de processamento de dados
    printf("Seu peso ideal é: %.lf\n", pesoIdeal);
    return 0;
}