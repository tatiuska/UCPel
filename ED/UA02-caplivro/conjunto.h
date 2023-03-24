#define MAX 10

typedef struct {
    int numero;
} Elemento;

typedef struct {
    Elemento elemento[MAX];
    char nome;
} Conjunto;

//Funcao para criar uma lista de elementos
void criar(Conjunto *, char);

//Funcao para inicializar uma lista de elementos
void inicializar(Conjunto *);

//Funcao para inserir um elemento em uma determinada posição da lista, empurrando os elementos subsequentes
void inserir(Conjunto *, int);

//Funcao para remover um elemento de uma determinada posicao da lista
void remover(Conjunto *, int);

//Funcao para fazer a interseccao entre conjuntos, colocando o resultado em outro conjunto
void interseccao(Conjunto *, Conjunto *, Conjunto *);

//Funcao para fazer a uniao entre dois conjuntos e colocar o resultado em outro conjunto
void uniao(Conjunto *, Conjunto *, Conjunto *);

//Funcao para fazer a busca de um elemento dentro de um conjunto
void busca(Conjunto *, int);

//Funcao para imprimir determinado conjunto na tela
void imprimir(conjunto *);
