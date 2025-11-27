#include <stdio.h>

int main()
{
    int n, i, j;
    float x, sum = 0, term;

    printf("Enter no. of terms: ");
    scanf("%d", &n);

    float X[n], y[n];

    printf("Enter values of X:\n");
    for (i = 0; i < n; i++)
        scanf("%f", &X[i]);

    printf("Enter values of Y:\n");
    for (i = 0; i < n; i++)
        scanf("%f", &y[i]);

    printf("Enter value of x for which you want to find y: ");
    scanf("%f", &x);

    for (i = 0; i < n; i++)
    {
        term = 1;
        for (j = 0; j < n; j++)
        {
            if (i != j)
                term = term * ( (x - X[j]) / (X[i] - X[j]) );
        }
        sum = sum + term * y[i];
    }

    printf("Value at X = %g is %f\n", x, sum);

    return 0;
}