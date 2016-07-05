import java.util.*;
import java.lang.*;
import java.io.*;

class Hello {
	public static void main (String[] args) {
	    Scanner sc = new Scanner(System.in);
	    int t = sc.nextInt();
	    for(int i=0;i<t;i++)
	    {
	        int n = sc.nextInt();
	        long m=3,a=0,b=1;
	        if(n==1 || n==2 || n==3){ m=n;}
	        else
	        {
    	        for(int j=4;j<=n;j++)
    	        {
    	            m = m*2-(a+b);
    	            b=a+b;
    	            a=b-a;
    	        }
	        }
	        System.out.println(m);
	    }
	}
}