/*
 * HighlowGame.java
 *
 * Created on October 14th , 2017, 14:00 hrs
 *
 
 */

/**
 *
 * @author danielRodriguez
 */
package HighLowGameBlackbelt;

import java.util.Random;
import java.util.Scanner;
import java.security.SecureRandom;

public class HighLowGameBlackbelt {

	public static void main(String[] args) {
		String userinput= "";
		Scanner input = new Scanner(System.in);
		Random generator = new Random();
		int y=0;
		int i=0;
		int uppervalue;
		int lowervalue=1;
		int d=0;
		int e=0;
		int Rn3=0;
			System.out.println("Once you get the basic form working, see if you can write a program that goes the other direction. The user generates the number, and the computer tries to guess it. A sample run might look like this:\r\n" + 
					"Please think of a number between\r\n" + 
					"one and one hundred. I'll guess\r\n" + 
					"your number. You tell me if I'm \r\n" + 
					"too high, too low, or correct.\r\n" );
		int Rn1= 50;
		int Rn2= 50;
		  System.out.println("I guess:"+Rn1);
		 System.out.println("too (h)igh, too (l)ow, or (c)orrect?");
		 userinput= input.next();
		
		
		do {
		 char c = userinput.charAt(0);
		 
		 switch(c) {
		 case 'h':
			 if (d==0) {
				 uppervalue= Rn1;
				 Rn1= generator.nextInt(uppervalue-1)+1;
				 System.out.println(Rn1);
				 i++;	
				 userinput= input.next(); 
				 Rn3=Rn1;
		         e=1;
			 }
			 else if(d ==1 ) {
				 
				 uppervalue= Rn1;
				 lowervalue=Rn3;
				 Rn1= generator.nextInt(uppervalue-lowervalue+1)+lowervalue;
				 System.out.println(Rn1);
				 i++;	
				 userinput= input.next(); 
				 
			 }
		
		 
			 
			 
	      break;
		 
		 case 'l': 
			 if (e==0) {
				 uppervalue=100;
					lowervalue=Rn2;
					Rn2=generator.nextInt(uppervalue-lowervalue+1)+lowervalue;

					 i++;
						d=1;
		 
			 }
			 else if(e ==1 ) {
				 lowervalue=Rn1;
				 uppervalue= Rn2;
				 Rn1= generator.nextInt(uppervalue-lowervalue+1)+lowervalue;
				 System.out.println(Rn1);
				 i++;	
				 userinput= input.next(); 
				 d=1;
				
			 }
		
		 
		
		
		 break;
		 
		 
		 case 'c':
			 
			 i++; 
			 System.out.println("correct you got "+i+"turns"); 
			 
			 
 
		 break;
		 
		 }//end switch
		}while(y<1);
		 }

}
