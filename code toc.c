/******************************************************************************

                            Online C Compiler.
                Code, Compile, Run and Debug C program online.
Write your code in this editor and press "Run" button to compile and execute it.

*******************************************************************************/

#include <stdio.h>
int a[10][10],i,j,ns,nsig,sigma[20],mains[10][10],k=0,u=0,flag=7,flag1=2,y,flag3=9,flag4=9,g,r;
int states[10],fsa[10],nfsa[10],fs,nfs;
void main()
{
    printf("enter the number of states : ");
    scanf("%d",&ns);
    printf("enter  the states : ");
    for(i=0;i<ns;i++){
       
            scanf("%d",&states[i]);
        
    }
    printf("enter the number of elements in sigma : ");
    scanf("%d",&nsig);
    printf("enter sigma elements : ");
    for(j=0;j<nsig;j++){
       
            scanf("%d",&sigma[j]);
        
    }
    printf("enter the transition table : ");
    printf("\n");
    for(i=0;i<ns;i++){
        for(j=0;j<nsig;j++){
            scanf("%d",&a[i][j]);
        }
    }
    printf("\n");
    printf("\n");
       
    printf(" ");   
    for(i=0;i<nsig;i++)
    {
        printf(" %d",sigma[i]);
    }
    printf("\n");
    for(i=0;i<ns;i++){
         printf("%d-",states[i]);
        for(j=0;j<nsig;j++){
            printf("%d ",a[i][j]);
            
        }
        printf("\n");
    }
    printf("enter the final no of sates & values : ");
    scanf("%d",&fs);
    for(i=0;i<fs;i++)
    {
        scanf("%d",&fsa[i]);
    }
    printf("enter the non-final no of sates & values : ");
    scanf("%d",&nfs);
    for(i=0;i<nfs;i++)
    {
        scanf("%d",&nfsa[i]);
    }
    for(i=0;i<ns;i++)
    {
        for(j=0;j<ns;j++)
        {
            mains[i][j]=0;
        }
    }
    for(i=0;i<fs;i++)
    {
        printf("%d",fsa[i]);
    }
    printf("\n");
    for(i=0;i<nfs;i++)
    {
        printf("%d",nfsa[i]);
    }
    
    
    for(i=0;i<ns;i++)
    {
        for(j=0;j<ns;j++)
        {
            for(g=0;g<nfs;g++)
            {
                r=fsa[g];
                mains[j][g]==6;
                printf("hello");
                
                
            }
        }mains[g][i]==6;
        printf("hi");
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    printf("\n");
    printf("\n");
    
    printf(" ");   
    for(char i=0;i<ns;i++)
    {
        printf(" %d",states[i]);
    }
    printf("\n");
    for(char i=0;i<ns;i++)
    {
        printf("%d-",states[i]);
        for(j=0;j<ns;j++)
        {
            printf("%d ",mains[i][j]);
        }
        printf("\n");
    }
    
    
    
    
    
}
