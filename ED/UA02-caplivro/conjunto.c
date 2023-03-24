#include <stdio.h>
#include <string.h>
#include "conjunto.h"

//Funcao para criar uma lista de elementos
void criar(Conjunto *conjunto, char nome) {
    int i;
    conjunto -> nome = nome;
}

//Funcao para inicializar uma lista de elementos
void inicializar(Conjunto *conjunto) {
    int i;
    for(i=0, i<MAX, i++) {
        conjunto -> elemento[i].numero = 0;
    }
}

//Funcao para inserir um elemento em uma determinada posicao da lista, empurrando os elementos subsequentes
void inserir(Conjunto *conjunto, int elemento) {
    int i;
    for(i=0, i<MAX, i++) {
        if(conjunto -> elemento[i].numero == elemento) {
            return;
        }
    }
    for(i=0, i<MAX, i++) {
        if(conjunto -> elemento[i].numero == 0) {
            conjunto -> elemento[i].numero = elemento;
            break;
        }
    }
}

//Funcao para remover um elemento de uma determinada posicao da lista
