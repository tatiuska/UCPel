#include <stdio.h>

int main(){
    int numero1, numero2, maior;

    printf("Digite o primeiro numero: ");
    scanf("%d", &numero1);
    printf("Digite o segundo numero: ");
    scanf("%d", &numero2);

    if(numero1 != numero2){
        maior = numero1 > numero2 ? numero1 : numero2;
        printf("Maior: %d\n", maior);
    }
    else{
        printf("Os numeros sao iguais!!!\n");
    }

    return 0;
}

