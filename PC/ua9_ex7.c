#include <stdio.h>

int main() {
    float nota1, nota2, nota3, media;

    printf("Digite sua nota 1: ");
    scanf("%f", &nota1);
    printf("Digite sua nota 2: ");
    scanf("%f", &nota2);
    printf("Digite sua nota 3: ");
    scanf("%f", &nota3);

    media = (nota1 + nota2 + nota3)/3;

    printf("Sua media eh: %.2f\n", media);
    if(media < 5) {
        printf("REPROVADO.\n");
    }
    else{
        if(media < 7) {
            printf("RECUPERACAO.\n");
        }
        else{
            printf("APROVADO.\n");
        }
    }

    return 0;
}
