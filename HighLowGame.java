/*
 * HighlowGame.java
 *
 * Created on October 13th , 2017, 18:00 hrs
 *

 */

/**
 *
 * @author danielRodriguez
 */
package HighLowGame;

import java.util.*;
import java.lang.*;

public class HighLowGame {

	public static void main(String[] args) {
	int userinput =-1;
	Scanner input = new Scanner(System.in);
	Random generator = new Random();
	int i=0;
	int Nright = generator.nextInt(100-1)+1;
	
	
		System.out.println("I'm Thinking of a number between 1 and 100, and I'll tell you"+'\n'+"if you're too high!, too low! , or got it right!"+'\n'+"Good luck!");
	
	
		
	        
	        while (userinput!=Nright){
	            System.out.println((i+1)+")"+"please enter a number ");
	            userinput = input.nextInt();
	            if(userinput<Nright) {
	            	 System.out.println("Too low");
	            	 i++;
	 	            
	            }
	            else if(userinput>Nright) {
	            	 System.out.println("Too high");
	            	 i++;
	            	
	            }
	            else {
	            	 System.out.println("correct!");
	            	 i++;
	            }
	           
	          
	            
	        } // end while
	        System.out.println("It took "+i+" turns");
		

	}

}
