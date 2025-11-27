#include<stdio.h>

int main()
{
    int n;
    float sum1=0, sum2=0, sum3=0, sum4=0, a, b;
    
    // Input
    printf("Enter the number of observations: ");
    scanf("%d", &n);
    float x[n], y[n], augmented_matrix[2][3];
    
    printf("Enter the values of x: ");
    for(int i = 0; i < n; i++)
        scanf("%f", &x[i]);
    
    printf("Enter the values of y: ");
    for(int i = 0; i < n; i++)
        scanf("%f", &y[i]); 

    // Computations
    for(int i = 0; i < n; i++)
    {
        sum1 += x[i];
        sum2 += y[i];
        sum3 += x[i] * y[i];
        sum4 += x[i] * x[i];
    }

    // Augmented matrix
    augmented_matrix[0][0] = n;
    augmented_matrix[0][1] = sum1;
    augmented_matrix[0][2] = sum2;
    augmented_matrix[1][0] = sum1;
    augmented_matrix[1][1] = sum4;
    augmented_matrix[1][2] = sum3;

    // Solving using Gaussian Elimination
    float ratio = augmented_matrix[1][0] / augmented_matrix[0][0];
    for(int i = 0; i < 3; i++)
        augmented_matrix[1][i] = augmented_matrix[1][i] - ratio * augmented_matrix[0][i];
    
    // Upper Triangular Matrix
    printf("\nThe Upper Triangular Matrix:\n");
    for(int i = 0; i < 2; i++)
    {
        for(int j = 0; j < 3; j++)
            printf("%.2f ", augmented_matrix[i][j]);
        printf("\n");  
    }

    // Back Substitution to find a and b
    b = augmented_matrix[1][2] / augmented_matrix[1][1];
    a = (augmented_matrix[0][2] - augmented_matrix[0][1] * b) / augmented_matrix[0][0];
    
    printf("\nIntercept = %.2f and Slope = %.2f\n", a, b); 
    printf("Equation of the line: y = %.2f + %.2fx\n", a, b);

    return 0;
}