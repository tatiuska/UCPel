Algoritmo "triangulos"
// Disciplina   : [Nivelamento em Programação de Computadores]
// Professor   : Alexandra Lackmann Zimpeck
// Descrição   : Algoritmo para classificação de triângulos
// Autor(a)    : Tatiana Weska
// Data atual  : 30/03/2023
Var
// Seção de Declarações das variáveis
A, B, C: inteiro
mens: caracter

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
ESCREVA("Digite o valor de A: ")
LEIA(A)
ESCREVA("Digite o valor de B: ")
LEIA(B)
ESCREVA("Digite o valor de C: ")
LEIA(C)

SE (A < B+C) E (B < A+C) E (C < B+A) ENTAO
   SE (A = B) E (B = C) ENTAO
      mens <- "Triângulo Equilátero"
      SENAO
           SE (A = B) OU (B = C) OU (A = C) ENTAO
              mens <- "Triângulo Isósceles"
           SENAO
              mens <- "Triângulo Escaleno"
   SENAO
        mens <- "Não é possível formar um triângulo"
FIMSE
   ESCREVA(mens)

Fimalgoritmo
FIMSE