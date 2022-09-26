#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main( int argc, char *argv[ ] )
{
	int cont;
	int i;
	int j;
        char linha[256];
	char t[100];
	char esp[] = " ";
	char comando[256] = "mosquitto_pub -h broker.emqx.io -t pi2a/msgs -m '";
	char finalcomando[] = "'";

        // Junta os argumentos separando por um espaco
        for(cont=1; cont < argc; cont++){

	    int i = 0, j = 0;
            while (linha[i] != '\0') {
                   i++;
            }
            while ((linha[i++] = argv[cont][j++]) != '\0');

            i = 0, j = 0;
            while (linha[i] != '\0') {
                   i++;
            }
            while ((linha[i++] = esp[j++]) != '\0');

	}
        // Junta o comando MQTT com os argumentos
        i = 0, j = 0;
        while (comando[i] != '\0') {
                i++;
        }
        while ((comando[i++] = linha[j++]) != '\0');

        i = 0, j = 0;
        while (comando[i] != '\0') {
                 i++;
        }
        while ((comando[i++] = finalcomando[j++]) != '\0');

        system(comando);
	return 0;
}
