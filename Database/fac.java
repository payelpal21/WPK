import java.util.*;//package
public class fac {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc=new Scanner(System.in);
		System.out.println("enter a num");
		int n=sc.nextInt();
            int fact=1;
            for (int i=n;i>=1;i--)
            {
            	fact=fact*i;// fact*=i shorthand operator
            }
            
            System.out.println("output="+fact);
	}

}
