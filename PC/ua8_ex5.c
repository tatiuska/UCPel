#include <stdio.h>
#include <stdbool.h>

int main() 
{
    bool p = false, t = true;
    printf("a: %d b: %d\n", p, t);
    printf("a: && b: %d\n", p&&t);
    printf("a: || b: %d\n", p||t);
    printf("!a: %d\n", !p);
}