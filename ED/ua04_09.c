#include <stdio.h>
#include <stdlib.h>

int main(){

    int x, y, *p;

    y = 0;
    p = &y;
    x = *p;
    x = 4;
    (*p)++;
    --x;
    (*p) += x;
    printf("x = %d\n", x);
    printf("y = %d\n", y);

    return 0;

}
