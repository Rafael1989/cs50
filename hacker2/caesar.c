#include <cc50.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char *argv[]){
   int k = atoi(argv[1]);
   string fileName = GetString();
   if(argc != 2 && k < 0){
       return 1;
   }
   char c[1000];
   FILE *fptr;
   if((fptr = fopen(fileName,"r")) == NULL) {
       return 2;
   }

   fscanf(fptr, "%[^\n]", c);
   
   for(int i = 0; i < strlen(c); i++){
      if(c[i] < 91 && c[i] > 64){
          c[i] += k;
          if(c[i] > 90){
              c[i] -= 26;
          }
      }else if(c[i] < 123 && c[i] > 96){
          if(c[i] > 108){
              c[i] -= 26;
          }

          c[i] += k;
      }
   }
   printf("%s\n",c);
 
   return 0;
}
