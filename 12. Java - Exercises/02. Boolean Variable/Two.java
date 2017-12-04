import java.util.Scanner;

public class Two {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String input = scan.nextLine();
        boolean result = Boolean.parseBoolean(input);
        if (result) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}
