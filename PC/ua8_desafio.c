#include <stdio.h>

int main() {
    int numero, antecessor, sucessor, contador, resultado, a, b, c;
    printf("Digite um número para saber o sucessor e o antecessor: ");
    scanf("%d", &numero);

    antecessor = numero - 1;
    sucessor = numero + 1;
    printf("O antecessor de %d é %d, e o sucessor é %d", numero, antecessor, sucessor);

    printf("Tabuada de Multiplicação de %d\n", numero);
    contador = 1;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n");

    printf("Três próximos números contado de dois em dois:\n");
    a = numero + 2;
    b = a + 2;
    c = b + 2;
    printf("%d - %d - %d\n", a, b, c);

    return 0;
}