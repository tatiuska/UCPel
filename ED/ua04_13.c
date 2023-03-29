#include <stdio.h>
#include <stdlib.h>

int main(){

    int a = 25;
    int *pa;
    pa = &a;
    int b = *pa + a;

    printf("%d %d %d \n", a, *pa, b);

    return 0;
}
