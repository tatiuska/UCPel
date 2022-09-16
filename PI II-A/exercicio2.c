#include <stdio.h>
#include <string.h>

int main()
{
    char carac[5];
    char frase[20];

    //caracteres independentes
    for(int i=0; i < 5; i++)
    {
        printf("Digite o caracter: \n");
        scanf(" %c", &carac[i]); //espaço para não considerar o enter como um caractere.
    }

    //frases
    printf("Digite uma frase: \n");
    scanf("%s", frase);
}