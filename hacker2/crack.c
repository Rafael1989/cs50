#define _XOPEN_SOURCE

#include <stdio.h>
#include <cc50.h>
#include <string.h>
#include <stdlib.h>
#include <ctype.h>
#include <crypt.h>
#include <unistd.h>

int main(int argc, char* argv[]) {
    if (argc != 2) {
        return 1;
    }
    
    char generated_password[9] = {};
    
    char test[9] = {};

    char salt[3];
    salt[0] = argv[1][0];
    salt[1] = argv[1][1];

    char arr[95];
    for(int i = 0; i < 95; i++) arr[i] = (char) (i + 32);
    
    
    for(int i = 0; i < 95; i++)
        for(int j = 0; j < 95; j++)
            for(int k = 0; k < 95; k++)
                for(int l = 0; l < 95; l++)
                    for(int m = 0; m < 95; m++)
                        for(int n = 0; n < 95; n++)
                            for(int o = 0; o < 95; o++)
                                for(int p = 0; p < 95; p++) {
                                    generated_password[0] = arr[i];
                                    generated_password[1] = arr[j];
                                    generated_password[2] = arr[k];
                                    generated_password[3] = arr[l];
                                    generated_password[4] = arr[m];
                                    generated_password[5] = arr[n];
                                    generated_password[6] = arr[o];
                                    generated_password[7] = arr[p];

                                    for(int q = 0, r = 8; q <= 7; q++, r--)
                                        for(int s = 0; s < q + 1; s++) {
                                            strncpy(test, generated_password+s, r);
                                            test[r] = '\0';
                                            
                                            if(strcmp(crypt(test, salt), argv[1]) == 0) {
                                                printf("%s\n", test);
                                                return 0;   
                                            }
                                        }
                                }
    
    
    return 0;
}
