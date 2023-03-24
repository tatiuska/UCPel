//Exemplo de um TAD para transacoes em contas correntes bancárias
//Primeiro arquivo criado
typedef struct {
    char nome_cliente[30];
    int conta_num;
    float saldo_conta;
} Conta;

//Funcao para criacao de conta corrente
void criar(Conta *, char *, int, float);

//Funcao para deposito na conta corrente
int depositar(Conta *, float);

//Funcao para saque da conta corrente
int sacar(Conta *, float);

//Funcao para transferencia para a conta corrente
int transferir(Conta *, Conta *, float);

//Funcao para imprimir o extrato de uma conta corrente
void extrato(Conta *);