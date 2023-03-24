//programa menu.c
#include "operacao.c"

main(){
    //Criar os números
    Matematica Matematica1:
    criar(&Matematica1, 20, 10);

    //Somar com os numeros
    somar(&Matematica1, 5, 5);
    printf("Valores depois de somar: \\n");
    mostrar(&Matematica1);

    //Diminuir com os numeros
    diminuir(&Matematica1, 27, 11);
    printf("Valores depois de diminuir: \\n");
    mostrar(&Matematica1);

    //Multiplicar com os numeros
    multiplicar(&Matematica1, 3, 1);
    printf("Valores depois de multiplicar: \\n");
    mostrar(&Matematica1);

    //Dividir com os numeros
    dividir(&Matematica1, 2, 3);
    printf("Valores depois de dividir: \\n");
    mostrar(&Matematica1);

}
