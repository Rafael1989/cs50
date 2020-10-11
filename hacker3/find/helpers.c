/**************************************************************************** 
 * helpers.c
 *
 * CC50
 * Pset 3
 *
 * Helper functions for Problem Set 3.
 ***************************************************************************/
       
#include <cc50.h>
#include <stdio.h>
#include "helpers.h"


/*
 * Returns true if value is in array of n values, else false.
 */

bool 
search(int value, int array[], int n)
{
    int posicao = n / 2;
    int inicio = 0;
    int fim = n;
    while(true){
        if(array[posicao] > value){
            if(posicao >= 2){
                fim = posicao;
                posicao = (posicao + inicio) / 2;  
            }else{
                posicao -= 1;
                if(array[posicao] == value){
                    return true;
                }else{
                    return false;
                }
            }
        }else if(array[posicao] < value){
            if((fim-posicao) > 2){
                inicio = posicao;
                posicao = (fim + posicao) / 2; 
            }else{
                posicao += 1;
                if(array[posicao] == value){
                    return true;
                }else{
                    return false;
                }
            }
        }else if(array[posicao] == value){
            return true;
        }
    }
    return false;
}


/*
 * Sorts array of n values.
 */

bool 
sort(int values[], int n)
{
    int auxiliar;
    int posicao;
    for(int i = 0; i < n; i++){
        int menor = 65537;
        for(int j = i; j < n; j++){
            if(values[j] < menor){
                menor = values[j];
                posicao = j;
            }
        }
        auxiliar = values[i];
        values[i] = menor;
        values[posicao] = auxiliar;
    }
    return true;
}
