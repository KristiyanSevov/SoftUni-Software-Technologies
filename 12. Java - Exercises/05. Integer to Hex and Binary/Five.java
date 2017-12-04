import java.util.Scanner;

public class Five {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int n = scan.nextInt();
        String hex = Integer.toHexString(n).toUpperCase();
        String bl = Integer.toBinaryString(n);
        System.out.println(hex);
        System.out.println(bl);
    }
}
