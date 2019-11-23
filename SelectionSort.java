
public class SelectionSort {

	
	
	
	
	public static void main(String[] args) {
		int [] array= randomize();
		System.out.println("unsorted");
		System.out.println(" ");
		for (int i=0;i<10;i++) {
    System.out.print( array[i]+" , ");}
		System.out.println(" ");
		System.out.println(" ");
		System.out.println("sorted");
		System.out.println(" ");
		selection(array);
		
		
		
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
public static void selection(int []unsorted) {
	
	
	// we have to select the high number in the array 
	int[] highnumber= new int [10];
	
	
	

	
	for (int v=0 ; v<9;v++) {
	//looking a replacement for the N' number 
	for (int i=0; i<unsorted.length-v; i++) {
	if (unsorted[i]>highnumber[v]) {
		
		highnumber[v]=unsorted[i];
		
		
		
	}//end if
	}//end for
	for (int i=0; i<unsorted.length;i++)
	{
		//we have to replace the first number
		if (unsorted[i]==highnumber[v]) {
			unsorted[i]=unsorted[9-v];
			unsorted[9-v]=highnumber[v];
			
		}
	}
	}
	
	

	for (int i = 0; i <unsorted.length; i++) {
	System.out.print(unsorted[i]+" , ");}
	}
	
	

	
	
	
	
	
}





