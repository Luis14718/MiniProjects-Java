/*
 * Cryptoblackbelt.java
 *
 * Created on FEBRUARY 08TH , 2018
 *
 
 */

/**
 *
 * @author danielRodriguez
 */


import java.util.Random;

public class InsertionSortx {
 
    public static void main(String a[]){
   
System.out.println("unsorted");
        int[] arr1 = new int[99];
        
        for (int b=0; b<arr1.length; b++)
        	
        {
        	
        arr1[b]= (int)(Math.random()*999);
        	
        }
 for(int i:arr1){
        	
            System.out.print(i);
            System.out.print(", ");
            
        }
 System.out.println("");
 System.out.println("Sorted");
        int[] array2 = Sort(arr1);
        for(int i:array2){
        	
            System.out.print(i);
            System.out.print(", ");
            
        }
    }
     
    
    public static int[] Sort(int[] array1){
         
        int next;
        for (int i = 0; i < array1.length; i++) {
            for(int j = i ; j > 0 ; j--){
                if(array1[j] < array1[j-1]){// this look f the number is less than the catch before
                    next = array1[j];//this catch the number
                    array1[j] = array1[j-1];// this make the array get the number before
                    array1[j-1] = next;
                }
            }
        }
        return array1;
    }
}