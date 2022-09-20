#include <stdio.h>

int main()
{
    double primeiranota, segundanota, media;
    primeiranota = 0;
    segundanota = 0;
    media = 0;

    printf("Digite sua primeira nota: ");
    scanf("%lf", &primeiranota);
    printf("Digite sua segunda nota: ");
    scanf("%lf", &segundanota);

    media = (primeiranota + segundanota)/2;

    printf("A media de %lf e %lf e %lf", primeiranota, segundanota, media);

    return 0;
}
