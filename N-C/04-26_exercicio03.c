#include <stdio.h>
//arrumar codigo
int main(){

//variaveis
int altura;
float peso;
char classificacao;

//dados de entrada
printf("Informe sua altura (em cm): \n");
scanf("%d", &altura);

printf("Informe seu peso (em kg): \n");
scanf("%.2f", &peso);

//processamento
if(altura < 120) and (peso <= 60); {
    classificacao = "A";
}
if else (altura > 120, <= 170, peso <= 60){
    classificacao = "B";
}
if else (altura > 170) and (peso <= 60){
    classificacao = "C";
}
if else (altura < 120) and (peso > 60 and <= 90){
    classificacao = "D";
}
if else (altura > 120 and <= 170) and (peso > 60 and <= 90){
    classificacao = "E";
}
if else (altura > 170) and (peso > 60 and <= 90){
    classificacao = "F";
}
if else (altura < 120) and (peso > 90){
    classificacao = "G";
}
if else (altura > 120 and <= 170) and (peso > 90){
    classificacao = "H";
}
if else (altura > 170) and (peso > 90){
    classificacao = "I";
}
else {
    printf("Valores inválidos!");
}

//dados de saida
printf("Sua altura eh %d, seu peso eh %.2f e sua classificacao eh %c", altura, peso, classificacao);

return 0;
}
