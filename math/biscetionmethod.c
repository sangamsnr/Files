#include<stdio.h>
float findvalueat(float x)
{
    return xxx-2*x-5;

}

float bisect(float x1, float x2)
{
    return(x1+x2)/2;
}

int main()
{
    int maxIteration , i =1;
    float x1,x2,x;
    printf("Enter max no of Iterations\n");
    scanf("%d",&maxIteration);

    do{
        printf("enter the value of x1 and x2(starting boundry)");
        scanf("%f%f",&x1,&x2);
        if(findvalueat(x1)*findvalueat(x2)>0){
            printf("roots are invalid");
            continue;
        }else{
            printf("root lie between %f and %f \n",x1,x2);
            break;
        }
    }while(1);


    while(i<=maxIteration)
    {
        x = bisect(x1,x2);
        if(findvalueat(x)*findvalueat(x1)<0)
        {
            x2=x;
        }
        else if(findvalueat(x)*findvalueat(x2)<0)
        {
            x1 = x;
            printf("iterations = %d roots = %f\n",i,x);
            i++;

        }
        printf("root = %f total interations = %d" , x , --i);
    }
}