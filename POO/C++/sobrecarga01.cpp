#include <iostream>

/* Sobrecarga de operadores */

class ponto{
    int x, y;
public:
    ponto(int a, int b){
        x = a;
        y = b;
    }

    ponto operator+(ponto p);
};

ponto ponto::operador+(ponto p){
    int a, b;
    a = x + p.x;
    b = y + p.y;

    return ponto(a, b);
}


