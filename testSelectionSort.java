
public class SelectionSort {

	
	private static int[] randomized= {5,6,89,54,78,5,8,4,98,75};
	
	
	public static void main(String[] args) {
	/*	int [] array= randomize();
		for (int i=0;i<10;i++) {
    System.out.print( array[i]+" , ");}*/
		selection();
	}
	
	
	
	
	
	
	// create the random array 
public static int[] randomize() {
	int[] randomarray = new int[10];
	
	
	
	for (int a=0; a<10; a++){
	 randomarray[a]= (int)(Math.random()*999);
	}
	
	
	return randomarray;	
}

//selection sort 
public static void selection() {
	
	
	// we have to select the high number in the array 
	int highnumber= randomized[0];
	int highnumber2= randomized[0];
	int highnumber3= randomized[0];
	int highnumber4= randomized[0];
	int highnumber5= randomized[0];
	int highnumber6= randomized[0];
	int highnumber7= randomized[0];
	int highnumber8= randomized[0];
	int highnumber9= randomized[0];
	int highnumber10= randomized[0];
	int d=randomized.length;
	

	
	
	//looking a replacement for the first number 
	for (int i=0; i<randomized.length; i++) {
	if (randomized[i]>highnumber) {
		
		highnumber=randomized[i];
		
		
		
	}//end if
	}//end for
	for (int i=0; i<randomized.length;i++)
	{
		//we have to replace the first number
		if (randomized[i]==highnumber) {
			randomized[i]=randomized[9];
			randomized[9]=highnumber;
			
		}
	}
	//looking a replacement for the second number 
	for (int i=0; i<randomized.length-1; i++) {
	if (randomized[i]>highnumber2) {
		
		highnumber2=randomized[i];
		
		
		
	}//end if
	}//end for
	for (int i=0; i<randomized.length-1;i++)
	{
		//we have to replace the second number
		if (randomized[i]==highnumber2) {
			randomized[i]=randomized[9-1];
			randomized[9-1]=highnumber2;
			
		}//end if
	}//end for 
	
	//looking a replacement for the third number 
	for (int i=0; i<randomized.length-2; i++) {
		if (randomized[i]>highnumber3) {
			
			highnumber3=randomized[i];
			
			
			
		}//end if
		}//end for
	for (int i=0; i<randomized.length-2;i++)
	{
		//we have to replace the third number
		if (randomized[i]==highnumber3) {
			randomized[i]=randomized[9-2];
			randomized[9-2]=highnumber3;
			
		}//end if
	}//end for 
	//looking for a replacement for the fourth number 
	for (int i=0; i<randomized.length-3; i++) {
		if (randomized[i]>highnumber4) {
			
			highnumber4=randomized[i];
			
			
			
		}//end if
		}//end for
	for (int i=0; i<randomized.length-3;i++)
	{
		//we have to replace the fourth number
		if (randomized[i]==highnumber4) {
			randomized[i]=randomized[9-3];
			randomized[9-3]=highnumber4;
			
		}//end if
	}//end for 
	//looking for a replacement for the fifth number 
		for (int i=0; i<randomized.length-4; i++) {
			if (randomized[i]>highnumber5) {
				
				highnumber5=randomized[i];
				
				
				
			}//end if
			}//end for
		for (int i=0; i<randomized.length-4;i++)
		{
			//we have to replace the fifth number
			if (randomized[i]==highnumber5) {
				randomized[i]=randomized[9-4];
				randomized[9-4]=highnumber5;
				
			}//end if
		}//end for 
		//looking for a replacement for the sixth number 
				for (int i=0; i<randomized.length-5; i++) {
					if (randomized[i]>highnumber6) {
						
						highnumber6=randomized[i];
						
						
						
					}//end if
					}//end for
				for (int i=0; i<randomized.length-5;i++)
				{
					//we have to replace the fifth number
					if (randomized[i]==highnumber6) {
						randomized[i]=randomized[9-5];
						randomized[9-5]=highnumber6;
						
					}//end if
				}//end for 
				//looking for a replacement for the seventh number 
				for (int i=0; i<randomized.length-6; i++) {
					if (randomized[i]>highnumber7) {
						
						highnumber7=randomized[i];
						
						
						
					}//end if
					}//end for
				for (int i=0; i<randomized.length-6;i++)
				{
					//we have to replace the fifth number
					if (randomized[i]==highnumber7) {
						randomized[i]=randomized[9-6];
						randomized[9-6]=highnumber7;
						
					}//end if
				}//end for 
				//looking for a replacement for the eighth number 
				for (int i=0; i<randomized.length-7; i++) {
					if (randomized[i]>highnumber8) {
						
						highnumber8=randomized[i];
						
						
						
					}//end if
					}//end for
				for (int i=0; i<randomized.length-7;i++)
				{
					//we have to replace the eighth number
					if (randomized[i]==highnumber8) {
						randomized[i]=randomized[9-7];
						randomized[9-7]=highnumber8;
						
					}//end if
				}//end for 
				//looking for a replacement for the ninth number 
				for (int i=0; i<randomized.length-8; i++) {
					if (randomized[i]>highnumber9) {
						
						highnumber9=randomized[i];
						
						
						
					}//end if
					}//end for
				for (int i=0; i<randomized.length-8;i++)
				{
					//we have to replace the ninth number
					if (randomized[i]==highnumber9) {
						randomized[i]=randomized[9-8];
						randomized[9-8]=highnumber9;
						
					}//end if
				}//end for 
				//looking for a replacement for the tenth number 
				for (int i=0; i<randomized.length-9; i++) {
					if (randomized[i]>highnumber10) {
						
						highnumber10=randomized[i];
						
						
						
					}//end if
					}//end for
				for (int i=0; i<randomized.length-9;i++)
				{
					//we have to replace the tenth number
					if (randomized[i]==highnumber10) {
						randomized[i]=randomized[9-9];
						randomized[9-9]=highnumber10;
						
					}//end if
				}//end for 
	
	System.out.println(highnumber);
	System.out.println(highnumber2);
	System.out.println(highnumber3);
	System.out.println(highnumber4);
	System.out.println(highnumber5);
	System.out.println(highnumber6);
	System.out.println(highnumber7);
	System.out.println(highnumber8);
	System.out.println(highnumber9);

	for (int i = 0; i <randomized.length; i++) {
	System.out.print(randomized[i]+",");}
	}
	
	

	
	
	
	
	
}





