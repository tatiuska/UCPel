//programa operacao.h
typedef struct {
    int valor1;
    int valor2;
} Matematica;

//Funcao para criacao dos numeros
void criar(Matematica *, int, int);

//Funcao para somar com os numeros
int somar(Matematica *, int, int);

//Funcao para diminuir com os numeros
int diminuir(Matematica *, int, int);

//Funcao para multiplicar com os numeros
int multiplicar(Matematica *, int, int);

//Funcao para dividir com os numeros
int dividir(Matematica *, int, int);

//Funcao para mostrar os numeros
void mostrar(Matematica *);
