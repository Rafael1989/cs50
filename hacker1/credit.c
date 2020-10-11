#include <cc50.h>
#include <stdio.h>
#include <string.h>

int main(void) {
    printf("Número: ");
    string numero = GetString();
    int nDigits = strlen(numero);
    if(nDigits == 14 || nDigits < 13 || nDigits > 16){
        printf("INVÁLIDO\n");
        return 0;
    }
    
    int imparInteiro = 0;
    int soma = 0;
    char somaTexto[nDigits];
    char imparTexto[nDigits];

    for(int i = 0; i < nDigits; i++){
        if(i%2!=0){
    	    imparInteiro = ((int)numero[i] - 48)*2;
            if(imparInteiro < 10){
                soma += imparInteiro;
            }else{
                sprintf(imparTexto, "%d",imparInteiro);
                for(int j = 0; j < strlen(imparTexto); j++){
                    soma += ((int)imparTexto[j] - 48);
                }
            }
        }else{
            soma += ((int)numero[i] - 48);
        }
    }
    sprintf(somaTexto, "%d", soma);
    for(int i = 0; i < strlen(somaTexto); i++){
        if(i == (strlen(somaTexto)-1)){
            if(((int)somaTexto[i] - 48) == 0){
                if((nDigits == 13 || nDigits == 16) && ((int)numero[0] - 48) == 4){
                    printf("VISA\n");
                }else if((nDigits == 15) && (((int)numero[0] - 48) == 3) && ((((int)numero[1] -48) == 4) || (((int)numero[1] -48) == 7))){
                    printf("AMEX\n");
                }else if((nDigits == 16) && (((int)numero[0] - 48) == 5) && ((((int)numero[1] -48) == 1) || (((int)numero[1] -48) == 2) || (((int)numero[1] -48) == 3) || (((int)numero[1] -48) == 4) || (((int)numero[1] -48) == 5))){
                    printf("MASTERCARD\n");
                }
            }else{
                printf("INVÁLIDO\n");
            }
        } 
    }
}

