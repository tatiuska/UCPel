#include <stdio.h>

int soma(int valor) {
    if(valor != 0){
        return valor + soma(valor - 1);
    } else{
        return valor;
    }
}
int main(){
    int n, resultado = 0;
    printf("\nDigite um numero inteiro positivo: ");
    scanf("%d", &n);
    resultado = soma(n);
    printf("\nResultado da soma = %d", resultado);
    return 0;
}
