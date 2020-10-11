#include <cc50.h>
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(void){

    srand(time(NULL));

    int skittles = rand() % 1024;
    
    printf("Olá! Eu sou uma máquina de balas falante! Adivinhe quantos Skittles têm dentro de mim. Dica: Estou pensando em um número entre 0 e 1023. Qual é ele?\n");
    
    int tentativa = 0;
    
    do{

        tentativa = GetInt();
        
        if(tentativa == skittles){
            printf("Você está certo! Nom nom nom nom.\n");
        }else if(tentativa > skittles){
            printf("Ok, eles não são tantos assim. Tente novamente.\n");
        }else if(tentativa < skittles){
            printf("Haha! Tenho muito mais Skittles do que isso. Tente novamente\n");
        }else{
            printf("Não tente ser difícil... Adivinhe novamente.\n");
        }
   }while(tentativa != skittles);

   return 0;   
    
}
