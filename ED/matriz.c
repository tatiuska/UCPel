#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define lines 4
#define columns 8

main(){
        int line_position = 0, column_position = 0, matrix[lines][columns],
    value = 0, biggest = 0;

        for(line_position = 0; line_position < lines; line_position++){
            for(column_position = 0; column_position < columns; column_position++){
                value = line_position + column_position;
                matrix[line_position][column_position] = value;
            }
        }

        printf("The matrix created contains the following elements: \n\n");

        for(line_position = 0; line_position < lines; line_position++){
            for(column_position = 0; column_position < columns; column_position++){
                printf("| %2d ", matrix[line_position][column_position]);
            }
            printf("|\n");
        }

        printf("\n\nThe biggest element in the matrix is: \n\n");

        for(line_position = 0; line_position < lines; line_position++){
            for(column_position = 0; column_position < columns; column_position++){
                if(matrix[line_position][column_position] > biggest)
                    biggest = matrix[line_position][column_position];
            }
        }
        printf("| %d | ", biggest);

}
