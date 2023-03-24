//programa operacao.c
#include <stdio.h>
#include <string.h>
#include "operacao.h"
int flag = 0;

//Funcao para a criacao de numeros
void criar(Matematica *matematica, int valor1, int valor2){
    matematica -> valor1 = valor1;
    matematica -> valor2 = valor2;
}
//Funcao para somar com os numeros
int somar(Matematica *matematica, int valor1, int valor2){
    matematica -> valor1 += valor1;
    matematica -> valor2 += valor2;
    return 1;
}
//Funcao para diminuir com os numeros
int diminuir(Matematica *matematica, int valor1, int valor2){
    if((matematica -> valor1 - valor1) >= 0){
        matematica -> valor1 -= valor1;
        flag = 1;
    }
    if((matematica -> valor2 - valor2) >= 0){
        matematica -> valor2 -= valor2;
        flag = 1;
    }
    if(flag = 1)
        return 1;
    else
        return 0;
}
//Funcao para multiplicar com os numeros
int multiplicar(Matematica *matematica, int valor1, int valor2){
    matematica -> valor1 *= valor1;
    matematica -> valor2 *= valor2;
    return 1;
}
//Funcao para dividir com os numeros
int dividir(Matematica *matematica, int valor1, int valor2){
    if((matematica -> valor1 / valor1) >= 0){
        matematica -> valor1 /= valor1;
        flag = 1;
    }
    if((matematica -> valor2 / valor2) >= 0){
        matematica -> valor2 /=valor2;
        flag = 1;
    }
    if(flag = 1)
        return 1;
    else
        return 0;
}
//Funcao para mostrar os numeros
void mostrar(Matematica *matematica){
    printf("Valor1: %d \n", matematica -> valor1);
    printf("Valor2: %d \n", matematica -> valor2);
    printf("\n");
}
