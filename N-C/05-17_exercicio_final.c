#include <stdio.h>
#include <string.h>
#include <ctype.h>

#define TAMANHO_MAXIMO 100 // definição de tamanho máximo para o vetor

int main() {
    // variaveis
    char senha[TAMANHO_MAXIMO];
    int tamanho;
    int tem_maiuscula = 0;
    int tem_minuscula = 0;
    int tem_digito = 0;

    // dados de entrada
    printf("Digite a senha: ");
    fgets(senha, sizeof(senha), stdin);
    tamanho = strlen(senha) - 1; // Subtrai 1 para excluir o caractere de nova linha (\n)

    // processamento
    // verificar se a senha atende aos criterios
    for (int i = 0; i < tamanho; i++) {
        if (isupper(senha[i])) {
            tem_maiuscula = 1;
        } else if (islower(senha[i])) {
            tem_minuscula = 1;
        } else if (isdigit(senha[i])) {
            tem_digito = 1;
        }
    }

    // processamento e dados de saida
    // verificar se a senha e forte o suficiente
    if (tamanho >= 8 && tem_maiuscula && tem_minuscula && tem_digito) {
        printf("A senha eh forte.\n");
    } else {
        printf("A senha nao eh forte o suficiente.\n");
    }

    return 0;
}
