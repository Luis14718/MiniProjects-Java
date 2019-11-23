/*
 * Crypto.java
 *
 * Created on October 27th , 2017, 12:00 hrs
 *
 
 */

/**
 *
 * @author danielRodriguez
 */
package HighLowGameBlackbelt;

import java.util.Random;
import java.util.Scanner;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import java.awt.*;
import java.awt.geom.*;
import java.awt.Color;
import java.util.Random;
import java.util.Scanner;

public class Crypto {

  static Scanner input = new Scanner(System.in);
  static String alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  static String key =   "UBWKOVGAPRFJLCQHZENSXDMYTI";
    
  public static void main(String[] args) {
    boolean keepGoing = true;
    while(keepGoing){

      String response = menu();

        if (response.equals("1")){
          System.out.println("Please enter unencrypted phrase");
          String plain = input.next();
          plain = plain.toUpperCase();
          
          
          System.out.println(encrypt(plain));
 
         
        }
        else if (response.equals("2")){
          System.out.println("Please enter encrypted phrase");
          String code = input.next();
          code = code.toUpperCase();
          System.out.println(decrypt(code));
         
        } else if (response.equals("0")){
          System.out.println("Goodbye!");
          keepGoing = false;

        } else {
          System.out.println("Sorry. I didn't understand");
        } // end if
      } // end while
   } // end main    

private static String encrypt(String plain) {
	
	

     String result = "";
     for (int i = 0; i < plain.length(); i++)
     {
         int charPosition = alpha.indexOf(plain.charAt(i));
        
         char Val = key.charAt(charPosition);
         result += Val;
     }//end for
     return result;

    
     
   


   
}

private static String decrypt(String code) {
	
     String resultcode = "";
     for (int i = 0; i < code.length(); i++)
     {
         int charPosition = key.indexOf(code.charAt(i));
         
        
         char Val = alpha.charAt(charPosition);
         resultcode += Val;
     }//end for
     return resultcode;
	
	// TODO Auto-generated method stub

}

private static String menu() {
	// TODO Auto-generated method stub
	
	System.out.println("Select an option\r\n" + 
			"0) Quit\r\n" + 
			"1) Encrypt a phrase\r\n" + 
			"2) Decrypt a phrase\r\n" + 
			"\r\n" + 
			"Please enter your choice");
	String response="";
	response=input.next();

	return response;
}
} // end Crypto
    