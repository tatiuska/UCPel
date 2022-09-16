#include <stdio.h>

int main() {
    int numero, antecessor, sucessor, contador, resultado, a, b, c;
    printf("Digite um numero para saber o sucessor e o antecessor: ");
    scanf("%d", &numero);

    antecessor = numero - 1;
    sucessor = numero + 1;
    printf("O antecessor de %d e %d, e o sucessor e %d\n\n", numero, antecessor, sucessor);

    printf("Tabuada de Multiplicacao de %d\n", numero);
    contador = 1;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n", numero, contador, resultado);
    contador ++;
    resultado = numero * contador;
    printf("%d x %d: %d\n\n", numero, contador, resultado);

    printf("Tres proximos numeros contado de dois em dois:\n");
    a = numero + 2;
    b = a + 2;
    c = b + 2;
    printf("%d - %d - %d\n", a, b, c);

    return 0;
}
