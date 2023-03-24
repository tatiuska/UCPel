//exercicio para revisar estruturas
#include <stdio.h>

int main(void) {

    struct horario {    //definicao de uma estrutura
        int horas;
        int minutos;
        int segundos;
    };

    struct horario agora;   //struct horario = tipo da estrutura; agora = nome da estrutura.

    agora.horas = 17;   //inicializacao de valores para as variaveis que compoem a estrutura.
    agora.minutos = 54;
    agora.segundos = 33;

    printf("%i : %i : %i\n", agora.horas, agora.minutos, agora.segundos);

    system("pause");
    return 0;

}
