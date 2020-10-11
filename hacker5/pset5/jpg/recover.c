/****************************************************************************
 * recover.c
 *
 * CC50
 * Pset 5
 *
 * Find 50 pictures.
 ***************************************************************************/
       
#include <stdio.h>

int
main(void)
{

    const int BLOCKSIZE = 512;    
 
    // open input file 
    FILE* inptr = fopen("card.raw", "r");
    if (inptr == NULL)
    {
        printf("Could not open %s.\n");
        return 1;
    }


    unsigned char buffer[BLOCKSIZE];

    FILE* outptr = NULL;

    char image[7];

    int n = 0;

    while(fread(buffer,BLOCKSIZE,1,inptr) == 1){
        if(buffer[0] == 0xff && buffer[1] == 0xd8 && buffer[2] == 0xff && buffer[3] >= 0xe0 && buffer[3] <= 0xef){
            if(n > 0){
                fclose(outptr);
            }

            sprintf(image, "%03d.jpg", n);

            outptr = fopen(image, "w");

            if(outptr == NULL){
                printf("Error: Could not create image\n");
                return 1;
            }

            n++;
        }

        if(outptr != NULL){
            fwrite(buffer, BLOCKSIZE, 1, outptr);
        }
     }

     fclose(outptr);
     fclose(inptr);
     return 0;    
    
}
