
 class DataStructure {
	 public static void main(String[] args) {
			
			// TODO Auto-generated method stub
			new DataStructure();

		}
	 
	 //lINKED LIST
	Node head;
	public DataStructure(){
		head= null;
		Node e= new Node("Bmw M4",3.6,"Gasoline",null );
		Node d= new Node("Mercedez Benz AMG", 3.2,"Gasoline", e);
		Node c= new Node("Tesla model 3",3.0,"electric" ,d);
		Node b= new Node("Lamborghini Gallardo",4.0,"Gasoline",c);
		Node a = new Node("Audi A1",4.0,"Electric" ,b);
		head = a ;
		
		
		System.out.println("Cars, Time to go from 0 to 100, Type of engine");
		
		traverse();
		System.out.println();
		 Node g = new Node("Volkswagen jetta ",6.0 ,"Gasoline",b.getNext());
		 Node h = new Node("Toyota Prius",7.0,"electric",d.getNext());
		 Node i = new Node ("Ford Mustang",6.2,"Gasoline",d.getNext());
		    h.setNext(i);
		    b.setNext(g);
		    d.setNext(h);
		    
		    System.out.println("3 cars added to the list");
		    traverse();
		    
		    
		    System.out.println();
		    System.out.println( "Looking information for ford mustang ");
		    System.out.println();
		search("Ford Mustang");
		    
		    System.out.println();

		
		    g.setNext(c.getNext());
		    
		  
		    
		    System.out.println(" Leaving the one less than has 3.2 second" );

		    
		    traverse();
		  
		    
		    
		    
	}
	 
	

	  public void traverse(){
	   
	    Node currentNode = head;
	    while(currentNode != null){
	    	String Car= currentNode.getCar();
	    	String engine=  currentNode.getEngine();
	    	String Velo=  String.valueOf(currentNode.getVelo());
	      System.out.println(Car+" : "+Velo+" seconds and the engine works with "+ engine);
	     
	      currentNode = currentNode.getNext();
	    } // end while
	  } // end traverse
	  
	  public Node search(String n){
	// serching for the car 
		    Node result = null;
		    Node currentNode = head;
		    while (currentNode.getNext() != null){
		      if (currentNode.getCar().equals(n)){
		        result = currentNode;
		       double respon= currentNode.getVelo();
		       String Engine = currentNode.getEngine();
		        System.out.println("the node of ford mustang is :"+respon+"  " + Engine);
		      } // end if
		      currentNode = currentNode.getNext();
		      double respon= currentNode.getVelo();
		      
		    } // end while
		    return result;
	
		  } // end search

	
	// NODE 
	
	  public class Node {
			
			 
			String Carmodel, Engine; Node next; double Velo;
			 public Node(){ 
				 Velo=0;
				 Carmodel= "";
				 Engine="";
				 next = null; 
				 } // end constructor 
			 public Node(String car,double vel,String engine, Node next){
				 this.Carmodel = car;
				 this.Velo=vel;
				 this.Engine=engine;
				 this.next = next; 
				 } // end constructor 
			 public String getCar(){
				 return this.Carmodel;
				 
			 } // end 
			 public String getEngine(){
				 return this.Engine; 
			 } // end 
			 public Double getVelo() {
				 String velocity = String.valueOf(Velo);
				 return this.Velo;
				 
			 }//end 
			 public void setCar(String Car){ 
				 this.Carmodel = Car; }// end 
			 public Node getNext(){ 
				 return this.next; } // end getNext 
			 public void setNext(Node next){ this.next = next; } // end setNext
			 
			 


		}
	
	private static final String Velocity = null;
}
