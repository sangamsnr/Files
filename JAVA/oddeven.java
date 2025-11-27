import java.util.*;
public class oddeven {
    public static void main(String []args){
     Scanner sc= new Scanner (System.in);
    
     //  odd even condition check

    //  int x = sc.nextInt();
    //  if(x % 2 == 0){
    //     System.out.println("Even");
    // }
    // else {
    //     System.out.println("Odd");
    // }
    
    // if else condition check

//    int a = sc.nextInt();
//    int b = sc.nextInt();
   
//    if (a==b) { 
//     System.out.println("Equal");
//     }
//     else {
//         if (a>b){
//             System.out.println("a is greater");

//         } else {
//             System.out.println("a is lesser");
//         }

//     }
          
      // eles if statement
    //   int a = sc.nextInt();
    //   int b = sc.nextInt();

    //   if (a== b) {
    //     System.out.println("Equal");
    // }
    //    else if(a > b) {
    //         System.out.println("a is greater");
    //     }
    //     else {
    //         System.out.println("a is lesser");
    //     }
                
              //    if else check
        
        //    int buttom = sc.nextInt();

        //    if (buttom== 1) {
        //     System.out.println("HELLO");
        //    }
        //    else if (buttom == 2)     {
        //     System.out.println("Namaste");
        // }
        //    else if (buttom == 3 ){
        //     System.out.println("Bonjour");
        //    }
                
              // switch case check

        // int button = sc.nextInt();
        // switch(button) {
        //     case 1: System.out.println("Hello");
        //     break;
        //     case 2: System.out.println("Namaste");
        //     break;
        //     case 3: System.out.println("Bonjour");
        //     default: System.out.println("Invalid Button");
        // }
    
        //   practice

    //    int n = 5;
    //       switch(n) {
    //         case 1: 
    //         System.out.println("Monday");
    //          break;
    //         case 2: 
    //         System.out.println("Tuesday");
    //          break;
    //         case 3:
    //         System.out.println("Wednesday");
    //          break;
    //         case 4:
    //         System.out.print("Thursday");
    //          break;
    //         case 5:
    //         System.out.print("Friday");
    //          break;
    //         case 6:
    //         System.out.print("Saturday");
    //          break;
    //          default:
    //          System.out.print("Sunday");
    //       }
     
            //    calculator
          
        //  int calculator = sc.nextInt();
         
        //  int a = 10;
        //  int b = 5;
        //   switch(calculator) {
        // case 1:
        // System.out.println(a+b);
        // break;
        // case 2:
        // System.out.println(a-b);
        // break;
        // case 3:
        // System.out.println(a*b);
        // break;
        // case 4:
        // System.out.println(a/b);
        // break;
        // case 5: 
        // System.out.println(a%b);
        // break;


        // }

        // monthly check

        // int month = sc.nextInt();
        //  switch (month) {
          
        //     case 1:
        //   System.out.println("January");
        //    break;
        //   case 2:
        //   System.out.println("February");
        //    break;
        //   case 3:
        //   System.out.println("March");
        //    break;
        //   case 4:
        //   System.out.println("April");
        //    break;
        //   case 5:
        //   System.out.println("May");
        //    break;
        //   case 6:
        //   System.out.println("June");
        //    break;
        //   case 7:
        //   System.out.println("July");
        //     break;
        //   case 8:
        //     System.out.println("August");
        //     break;
        //   case 9:
        //   System.out.println("September");
        //    break;
        //    case 10:
        //    System.out.println("October");
        //    break;
        //    case 11:
        //    System.out.println("November");
        //    break;
        //    default:
        //    System.out.println("December");
        //    break;
        //  }
         
        int a = sc.nextInt();
        int b = sc.nextInt();
        int operator = sc.nextInt();
 
           switch(operator) {
            case 1 : System.out.println(a+b);
            break;
            case 2 : System.out.println(a-b);
            break;
            case 3 : System.out.println(a*b);
            break;
            case 4 : if(b == 0) {
                        System.out.println("Invalid Division");
                    } else {
                        System.out.println(a/b);
                    }
         break;
            case 5 : if(b == 0) {
                        System.out.println("Invalid Division");
                    } else {
                        System.out.println(a%b);
                    }
         break; 
            default : System.out.println("Invalid Operator");
           }
           



         



        
          

         

            



            

            
            
    


          



    
    
    }
   
}





    

    
    