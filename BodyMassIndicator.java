import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.text.DecimalFormat;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.JTextPane;
import javax.swing.border.EmptyBorder;
import javax.swing.table.DefaultTableModel;
import java.awt.Component;


public class BodyMassIndicator extends JFrame {

	private JPanel newlabel1;
	private JTextField answer;
	private JLabel labelwelcome;
	private JLabel changer;
	private JButton btnNewButton;
	 public  String status[] = {"Very severely underweight",
				"Severely underweight","Underweight",
				"Normal (healthy weight)",
				"Overweight",
				"Moderately obese",
				"Severely obese",
				"Very severely obese"};
	String show;
	 float FloatH;
	 String Height;
	 String Weight;
	 float FloatW;
	 float BMI;
	 int i = +1;
	 int a= 0;
	 float Floath2;
	 JTextPane textPane;
	 JLabel lblNewLabel;
	 DecimalFormat d = new DecimalFormat("#.#");
	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					BodyMassIndicator frame = new BodyMassIndicator();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	
	public BodyMassIndicator() {
		setForeground(new Color(0, 0, 128));
		setTitle("Body Mass Indicator");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);/*this is to add a botom to close the app*/
		setBounds(100, 100, 267, 389);
		newlabel1 = new JPanel();
		newlabel1.setAlignmentX(Component.LEFT_ALIGNMENT);
		newlabel1.setBackground(new Color(64, 224, 208));/*this is to add the color its based in the primary colors Red 64  Green 224 , blue 208 */

		setContentPane(newlabel1);
		newlabel1.setLayout(null);
		
		labelwelcome = new JLabel("Welcome");
		labelwelcome.setFont(new Font("Corbel", Font.PLAIN, 17));/* this change the format of the font of the label*/
		labelwelcome.setForeground(new Color(255, 255, 255));
		labelwelcome.setBounds(24, 11, 204, 14);
		newlabel1.add(labelwelcome);
		
		changer = new JLabel("Enter your name");
		changer.setForeground(new Color(255, 255, 255));
		changer.setBounds(25, 30, 203, 37); /*the size of the label */
		newlabel1.add(changer); /* this make the label to appear in the window*/
		
		answer = new JTextField();
		answer.setForeground(new Color(95, 158, 160));
		answer.setBounds(25, 70, 142, 20);
		newlabel1.add(answer);
		answer.setColumns(10);
		
		
		
		
		textPane = new JTextPane();
		textPane.setForeground(new Color(255, 255, 255));
		textPane.setBackground(new Color(0, 128, 128));
		textPane.setEditable(false);
		textPane.setBounds(25, 111, 198, 155);
		newlabel1.add(textPane);
		
		btnNewButton = new JButton("Send");
		btnNewButton.setForeground(new Color(255, 255, 255));
		btnNewButton.setBackground(new Color(72, 209, 204));
		btnNewButton.setBounds(78, 289, 89, 23);
		newlabel1.add(btnNewButton);
		
		lblNewLabel = new JLabel("Cm");
		lblNewLabel.setFont(new Font("Tahoma", Font.PLAIN, 13));
		lblNewLabel.setForeground(new Color(255, 255, 255));
		lblNewLabel.setBounds(177, 72, 44, 14);
		newlabel1.add(lblNewLabel);
		lblNewLabel.setVisible(false);
		btnNewButton.addActionListener(new send( ));
		
	}
	
	
	
	
	public class send implements ActionListener {

		@Override
		public void actionPerformed(ActionEvent e) {
			
			
			
		        if (i == 1){
		        	String mayusc= answer.getText();
		        	//this call the method to convert the first letter in uppercase
		           show= Upper(mayusc);
		        //	show= answer.getText(); /* this get the text from the Jtextfield*/
		        	answer.requestFocus();/* Focus in the label when it opens*/
		           if (show.equals("")) { /*when there is  no number this cannot pass to another option*/ 
		        	   changer.setText("Please insert your name");
		        	
		           }
		           
		           else {
		        	   i++;
		        	  labelwelcome.setText("Welcome  "+show+" !!");
		        	  answer.setText("");
		        	  lblNewLabel.setText("cm");
		        	  changer.setText("Insert your height in Centimeters ");
		        	  answer.setForeground(Color.BLUE);
		        	  answer.setHorizontalAlignment(JTextField.RIGHT);/*it's setting the alignment of the text to the right*/
		        	  lblNewLabel.setVisible(true);/*the mts  becomes visible*/
		        	  answer.requestFocus();
		        	  
		           }
		            
		        } else if (i == 2){
		        	
		        	if(answer.getText().equals("")) {
		        		changer.setText("Please insert your height! ");
		        		answer.requestFocus();
		        		i=2;
		        	}
		        	else {
		        		Height=answer.getText();
		        		
			        	FloatH= Float.parseFloat(Height); /* the text gotten from the jtextfield it's transform into a float*/
			        	Floath2= FloatH/100;
			        	answer.setText("");
			        	  textPane.setText("");
			        	changer.setText("Insert your weight");
			        	 lblNewLabel.setText("Kg");
			        	answer.requestFocus();
			        	 i++;
		        	}
		        	
		        		       
			           
		        } else if (i == 3){
		        
		        	if(answer.getText().equals("")) {
		        		changer.setText("Please insert  your weight! ");
		        		answer.requestFocus();
		        		i=3;
		        		
		        	}
		        	else {
		        		 lblNewLabel.setText("...");
		        		Weight= answer.getText();
		        		FloatW= Float.parseFloat(Weight);
		        	    BMI=  FloatW/(Floath2*Floath2);
		        	    
		        	    if (BMI<18.5) { answer.setForeground(Color.ORANGE);}/* when the  people is not in a normal weight, The color of the font will change*/
		        	    
		        		if (BMI<15){  a=0;   }       /* this I use it to  get a value for a array*/
		        		else if (BMI<16) { a=1;}
		        		else if (BMI<18.5) { a=2;}
		        		else if (BMI<25) { a=3; answer.setForeground(Color.green); lblNewLabel.setText("nice!"); }/* the condition is when is in a normal weight the font will be green*/
		        		else if (BMI<30) { a=4; answer.setForeground(new Color(155,100,50));}
		        		else if (BMI<35) { a=5;answer.setForeground(Color.red);}
		        		else if (BMI<40) { a=6;answer.setForeground(Color.red);}
		        		else if (BMI>40) { a=7;answer.setForeground(Color.red);}
		        		changer.setText("Your BMI category is:");
		        		answer.setText(status[a]);  
		        		String re3="";
		        	    String re="                          ◕‿◕         ";
		        	    String re2=" you need to diet...  ";
		        	    if (BMI>35){ re3=re2; newlabel1.setBackground(Color.red);textPane.setBackground(new Color(220,20,60));}/* the color of the panel will change to red when is a big BMI*/
		        	    else if (BMI<16) {re3=re2;}
		        	    else { re3 =re;}
		        	   
			    		textPane.setText("Your height is : " + d.format(Floath2)+"m"+'\n'+ "Your weight is: "+d.format(FloatW)+"kg"+ '\n'+ "The BMI is: " + d.format(BMI)+'\n'+"Thank you for use me !"+'\n'+ '\n'+'\n'+re3);/* the '\n' make the next variable pass to the next line*/
			    		
			    		i++;
			    	
			        	
			    		
			    		   
			    		btnNewButton.setText("Restart");
		        	}
		        	
		        	
		    		
		    		
		        } else if (i == 4){
		        	/* this make the program restart */
		        	btnNewButton.setText("Send");
			        textPane.setText("");
			        answer.setText("");
			        labelwelcome.setText("Welcome");
			        lblNewLabel.setText(" ");
			        answer.setForeground(new Color(95, 158, 160));
			        changer.setText("Please insert your name");
			        answer.setHorizontalAlignment(JTextField.LEFT);
			        newlabel1.setBackground(new Color(64, 224, 208));
			        textPane.setBackground(new Color(0, 128, 128));
			        
			        i=1;
		        } 

		}
/*this change the first letter to upper case in the case daniel to Daniel*/
		private String Upper(String letter) {
			String fig=letter;
		char dan=	fig.charAt(0);/* this  get the first char so the firt letter*/
		String change= Character.toString(dan);   /*this change back the char to string*/ 
		
			String plus=	 fig.substring(1);/*this make the program to take just the missing part with out the first letter*/
			String resultletter= change.toUpperCase()+plus;	 /* this  link the two things separated so the first letter and the missing part*/
				 
			return resultletter;
		}

	}
}
