Algoritmo "Conversor_Cedulas"
// Disciplina   : Curso de Nivelamento em Programa��o de Computadores
// Professora   : Alexandra Zimpeck
// Descri��o   : Conversor de c�dulas
// Autor(a)    : Tatiana Weska
// Data atual  : 04/04/2023
Var
// Se��o de Declara��es das vari�veis 
   valor, total_cedulas: inteiro
   ced200, ced100, ced50, ced20, ced10, ced5, ced2: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   valor <- 0;
   total_cedulas <- 0;
   ced200 <- 0;
   ced100 <- 0;
   ced50 <- 0;
   ced20 <- 0;
   ced10 <- 0;
   ced5 <- 0;
   ced2 <- 0;
   
   ESCREVAL("Informe o valor a ser convertido: R$ ")
   LEIA(valor)

   SE (valor >= 200) ENTAO ced200 <- valor\200
   FIMSE;
   SE (valor >= 100) ENTAO ced100 <- valor\100
   FIMSE;
   SE (valor >= 50) ENTAO ced50 <- valor\50
   FIMSE;
   SE (valor >= 20) ENTAO ced20 <- valor\20
   FIMSE;
   SE (valor >= 10) ENTAO ced10 <- valor\10
   FIMSE;
   SE (valor >= 5) ENTAO ced5 <- valor\5
   FIMSE;
   SE (valor >= 2) ENTAO ced2 <- valor\2
   FIMSE;
   
   total_cedulas <- ced200 + ced100 + ced50 + ced20 + ced10 + ced5 + ced2;
   
   ESCREVAL("O valor R$ ", valor, "equivale a: ", ced200, " c�dulas de R$ 200, ", ced100, " c�dulas de R$ 100, ", ced50, " c�dulas de R$ 50, ", ced20, " c�dulas de R$ 20, ", ced10, " c�dulas de R$ 10, " ced5, " c�dulas de R$ 10, e ", ced2, " c�dulas de R$ 2\n")
   ESCREVAL("Total de c�dulas: ", total_cedulas)
   
Fimalgoritmo