
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        Student s1 = new Student();
        System.out.println("before initialization");
        System.out.println(s1.name);
        s1.rollno = 1;
        s1.name = "ram";
        System.out.println("this is the name:" + s1.name);
        System.out.println("this is the roll:" + s1.rollno);
//using refrence variable
//       using constructor
//       using method
    }

    
}
