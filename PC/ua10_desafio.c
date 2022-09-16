#include <stdio.h>
int main(){
    int qtdwindowsserver=0;
    int qtdunix=0;
    int qtdlinux=0;
    int qtdnetware=0;
    int qtdmacos=0;
    int qtdoutro=0;
    int voto=0;
    int cont=0;

    float per_windowsserver, per_unix, per_linux, per_netware, per_macos, per_outro;
    voto=1;

    while(voto!=0){
        printf("Pesquisa: Qual o melhor SO para ser usado em servidores? Digite sua opcao:\n\n");
        printf(" 1 - Windows Server\n 2 - Unix\n 3 - Linux\n 4 - Netware\n 5 - MacOS\n 6 - Outro\n 0 - Encerrar votacao\n");
        scanf("%d", &voto);

        switch(voto){
            case 1:
                qtdwindowsserver++;
                cont++;
            break;
            case 2:
                qtdunix++;
                cont++;
            break;
            case 3:
                qtdlinux++;
                cont++;
            break;
            case 4:
                qtdnetware++;
                cont++;
            break;
            case 5:
                qtdmacos++;
                cont++;
            break;
            case 6:
                qtdoutro++;
                cont++;
            break;
            case 0:
                break;
            default:
                printf("Opcao invalida. Digite um valor valido!!\n\n");
        }
    per_windowsserver=(float)qtdwindowsserver/cont;
    per_windowsserver=per_windowsserver*100;

    per_unix=(float)qtdunix/cont;
    per_unix=per_unix*100;

    per_linux=(float)qtdlinux/cont;
    per_linux=per_linux*100;

    per_netware=(float)qtdnetware/cont;
    per_netware=per_netware*100;

    per_macos=(float)qtdmacos/cont;
    per_macos=per_macos*100;

    per_outro=(float)qtdoutro/cont;
    per_outro=per_outro*100;

    printf("***Sistema Operacional\tVotos\tPercentual%%***\n");
    printf("Windows Server\t\t%d\t%.2f\n", qtdwindowsserver, per_windowsserver);
    printf("Unix\t\t\t%d\t%.2f\n", qtdunix, per_unix);
    printf("Netware\t\t\t%d\t%.2f\n", qtdnetware, per_netware);
    printf("MacOS\t\t\t%d\t%.2f\n", qtdmacos, per_macos);
    printf("Outro\t\t\t%d\t%.2f\n", qtdoutro, per_outro);
    }

    return 0;
}

