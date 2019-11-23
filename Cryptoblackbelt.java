/*
 * Cryptoblackbelt.java
 *
 * Created on October 27th , 2017, 16:00 hrs
 *
 
 */

/**
 *
 * @author danielRodriguez
 */
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

public class Cryptoblackbelt {

  static Scanner input = new Scanner(System.in);
  static String alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  static String key =   "UBWKOVGAPRFJLCQHZENSXDMYTI";
 
    
  public static void main(String[] args) {
	  int response2=0;
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
         
        } 
        else if (response.equals("3")){
        	 System.out.println("the new key is:");
        	 String ra =randomkey();
        	 System.out.println(ra);
            System.out.println("Do you wanna use it?\r\n"+"1) yes\r\n"+"2) no and return to the menu");
          response2= input.nextInt();
           if (response2==1) {
        	
        	 key= ra;
              
        	keepGoing=true;
            
           }
           else if (response2==2){
        	   keepGoing=true;
  

           }
        
           else {
        	   
               System.out.println("Sorry. I didn't understand");
               System.out.println("Do you wanna use it?\r\n"+"1) yes\r\n"+"2) no and return to the menu");
              int answ= input.nextInt();
              response2= answ;
              if (response2==1) {
              	
             	 key= ra;
                   
             	keepGoing=true;
                 
                }
                else if (response2==2){
             	   keepGoing=true;
       

                }
             
             } // end if
          }else if (response.equals("0")){
          System.out.println("Goodbye!");
          keepGoing = false;

        } else {
          System.out.println("Sorry. I didn't understand");
        } // end if
      } // end while
   } // end main    

private static String randomkey() {
	
	String alphabet="";
    int n=26;  //numeros aleatorios
   int k=n;  //auxiliar;
   int a=0;
    int[] numeros=new int[n];
    int[] result=new int[n];
    Random rnd=new Random();
    int res;
    int v=0;
    
    
    //se rellena una matriz ordenada del 1 al 26(1..n)
    for(int i=0;i<n;i++){
        numeros[i]=i;
    }
    
    for(int i=0;i<n;i++){
        res=rnd.nextInt(k);            
        result[i]=numeros[res];
        numeros[res]=numeros[k-1];
        k--;
        
    }
     //se imprime el resultado;

   for(int i=0;i<26;i++) {
    alphabet +=key.charAt(result[i]);
    
   
   }
    
       return alphabet;
}

private static String encrypt(String plain) {
	
	

     String result = "";
     for (int i = 0; i < plain.length(); i++)
     {
         int charPosition = alpha.indexOf(plain.charAt(i));
        
         char Val = key.charAt(charPosition);
         result += Val;
     }
     return result;

    
     
   


   
}

private static String decrypt(String code) {
	
     String resultcode = "";
     for (int i = 0; i < code.length(); i++)
     {
         int charPosition = key.indexOf(code.charAt(i));
         
        
         char Val = alpha.charAt(charPosition);
         resultcode += Val;
     }
     return resultcode;
	
	// TODO Auto-generated method stub

}

private static String menu() {
	// TODO Auto-generated method stub
	
	System.out.println("Select an option\r\n" + 
			"0) Quit\r\n" + 
			"1) Encrypt a phrase\r\n" + 
			"2) Decrypt a phrase\r\n" + 
			"3) Create a new key \r\n" + 
			 
			"Please enter your choice");
	String response="";
	response=input.next();

	return response;
}
} // end Crypto
    