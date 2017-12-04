import java.util.Scanner;

public class Two {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        double a = Double.parseDouble(scan.nextLine());
        double b = Double.parseDouble(scan.nextLine());
        System.out.printf("%.2f", a + b);
    }
}
