import java.util.*;
class prime
{
    public static void main()
    {
        Scanner sc=new Scanner(System.in);
        System.out.println(" n er value input koro ");
        int n=sc.nextInt();
        boolean flag=true;
        for(int i=2;i<n;i++)
        {
            if(n%i==0)
            {
                flag=false;
                break;
            }
        }
        if(flag==true)
         System.out.println(" it is prime number ");  
        else
         System.out.println(" it is not prime number ");
    }
}
