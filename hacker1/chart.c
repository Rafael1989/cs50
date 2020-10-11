#include <cc50.h>
#include <stdio.h>

int main(void){
    printf("M procurando F: ");
    int mf = GetInt();
    printf("F procurando M: ");
    int fm = GetInt();
    printf("F procurando F: ");
    int ff = GetInt();
    printf("M procurando M: ");
    int mm = GetInt();

    int soma = mf + fm + ff + mm;

    int cmf = (mf * 20) / soma;
    int cfm = (fm * 20) / soma;
    int cff = (ff * 20) / soma;
    int cmm = (mm * 20) / soma;
    int maior = 0;

    if(cmf > maior){
        maior = cmf;
    }
    if(cfm > maior){
        maior = cfm;
    }
    if(cmm > maior){
        maior = cmm;
    }
    if(cff > maior){
        maior = cff;
    }
    
    printf("\n\n\n");
    for(int i = maior; i > 0; i--){
        if(cmf == i){
            printf("   ###   ");
            cmf--;
        }else{
            printf("         ");
        }
        if(cfm == i){
            printf("###   ");
            cfm--;
        }else{
            printf("      ");
        }
        if(cff == i){
            printf("###   ");
            cff--;
        }else{
            printf("      ");
        }
        if(cmm == i){
            printf("###   ");
            cmm--;
        }else{
            printf("      ");
        }
        printf("\n");
    }
    printf("   M-F   F-M   F-F   M-M   ");
    printf("\n\n\n");

    return 0;
}
