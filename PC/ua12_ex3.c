#include <stdio.h>
int fatorial(int valor){
    if(valor != 1){
        return valor * fatorial(valor-1);
    } else {
        return valor;
    }
}

int main(){
    int n, resultado=0;
    printf("\nDigite um numero positivo inteiro: ");
    scanf("%d", &n);
    resultado = fatorial(n);
    printf("\nResultado do fatorial: %d", resultado);
    return 0;
}
