package ChangeMakerLab;
import java.util.*;

import javax.swing.JFrame;
public class ChangeMakerLab{
	

	public static void main(String[] args) {
		Scanner input=new Scanner(System.in);/* here initialized the scanner*/
		System.out.println("Enter the price of the Item");
		float price=input.nextFloat();
		
		System.out.println("Enter the cash tendered");
		float cash=input.nextFloat();
		float float1 ;
		float1 = cash-price;
		System.out.println("change: "+ float1);
		float float2= float1*100;/*its multiplying by 100 in order to get the integers*/
		int change=(int)float2;/*Its transforming the floats into integers*/
		System.out.println("Change Left:"+change);
		int twenties=change/2000; /* the twenties are divided by 2000 in order to get the 20*/
		System.out.println("Twenties: "+twenties);
		int twenties2=change%2000;/*here the remainder of the last division is taken to get the next value*/
		int tens=twenties2/1000;
		System.out.println("Tens:"+tens);
		int tens2=twenties2%1000;
		int fives=tens2/500;
		System.out.println("Fives:"+fives);
		int five2=tens2%500;
		int one=five2/100;
		System.out.println("Ones:"+one);
		int one2=five2%100;
		int quater=one2/25;
		System.out.println("Quarters:"+quater);
		int quater2=one2%25;
		int dimes=quater2/10;
		System.out.println("Dimes:"+dimes);
		int dimes2=quater2%10;
		int nickles=dimes2/5;
		System.out.println("Nickles:"+nickles);
		int nickles2=dimes2%5;
		int pennies=nickles2/1;
		System.out.println("Pennies:"+pennies);


	}

}
