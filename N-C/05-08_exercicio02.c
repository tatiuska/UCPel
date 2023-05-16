#include <stdio.h>

//programa para calcular e imprimir quantos anos serao necessarios para que Cristina seja maior que Paula
int main(){

    //variaveis
    float a_paula = 1.70, a_cristina = 1.10;
    int anos = 0;

    //processamento
    while(a_paula >= a_cristina){
        a_paula = a_paula + 0.02;
        a_cristina = a_cristina + 0.03;
        anos = anos + 1;

        printf("Altura de Paula: %.2f \nAltura de Cristina: %.2f \nAnos: %d\n", a_paula, a_cristina, anos);
    }

    //dados de saida
    printf("Cristina sera mais alta do que Paula em %d anos", anos);

    return 0;
}
