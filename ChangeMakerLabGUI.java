package ChangeMakerLab;

import java.awt.BorderLayout;
import java.awt.EventQueue;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.text.DecimalFormat;
import java.util.Random;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.JTextPane;
import java.awt.Color;
import java.awt.*;

public class ChangeMakerLabGUI extends JFrame {

	private JPanel newlabel1;
	private JTextField anwer;
	private JLabel labelwelcome;
	private JLabel labelchanger;
	private JButton btnNewButton;
	String show;
	 float FloatP;
	 String price;
	 String cash;
	 float FloatC;
	 int i = +1;
	 JTextPane textPane;
	 JLabel lblNewLabel;
	 DecimalFormat d = new DecimalFormat("#.##");
	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					ChangeMakerLabGUI frame = new ChangeMakerLabGUI();
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
	
	public ChangeMakerLabGUI() {
		setForeground(new Color(0, 0, 128));
		setTitle("Change Maker Lab");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		newlabel1 = new JPanel();
		newlabel1.setBackground(new Color(95, 158, 160));
		newlabel1.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(newlabel1);
		newlabel1.setLayout(null);
		
		labelwelcome = new JLabel("Welcome");
		labelwelcome.setForeground(new Color(255, 255, 255));
		labelwelcome.setBounds(5, 5, 424, 14);
		newlabel1.add(labelwelcome);
		
		labelchanger = new JLabel("what's your name ?");
		labelchanger.setForeground(new Color(255, 255, 255));
		labelchanger.setBounds(5, 30, 267, 37);
		newlabel1.add(labelchanger);
		
		anwer = new JTextField();
		anwer.setForeground(new Color(95, 158, 160));
		anwer.setBounds(5, 64, 179, 20);
		newlabel1.add(anwer);
		anwer.setColumns(10);
		
		
		
		
		textPane = new JTextPane();
		textPane.setForeground(new Color(255, 255, 255));
		textPane.setBackground(new Color(0, 128, 128));
		textPane.setEditable(false);
		textPane.setBounds(5, 95, 179, 155);
		newlabel1.add(textPane);
		
		btnNewButton = new JButton("Send");
		btnNewButton.setForeground(new Color(255, 255, 255));
		btnNewButton.setBackground(new Color(72, 209, 204));
		btnNewButton.setBounds(318, 208, 89, 23);
		newlabel1.add(btnNewButton);
		
		lblNewLabel = new JLabel("$");
		lblNewLabel.setFont(new Font("Tahoma", Font.PLAIN, 18));
		lblNewLabel.setForeground(new Color(255, 255, 255));
		lblNewLabel.setBounds(185, 67, 46, 14);
		newlabel1.add(lblNewLabel);
		lblNewLabel.setVisible(false);
		btnNewButton.addActionListener(new send( ));
		
	}
	
	public class send implements ActionListener {

		@Override
		public void actionPerformed(ActionEvent e) {
			
			
			
		        if (i == 1){
		        	show= anwer.getText(); /* this get the text from the Jtextfield*/
		        	anwer.requestFocus();/* Focus in the label when it opens*/
		           if (show.equals("")) { /*when there is  no number this cannot pass to another option*/ 
		        	   labelchanger.setText("Please insert your name");
		        	
		           }
		           
		           else {
		        	   i++;
		        	  labelwelcome.setText("Welcome "+show+"!!!!!!!");
		        	  anwer.setText("");
		        	  labelchanger.setText("Insert the price of the item");
		        	  anwer.setForeground(Color.BLUE);
		        	  anwer.setHorizontalAlignment(JTextField.RIGHT);/*it's setting the alignment of the text to the right*/
		        	  lblNewLabel.setVisible(true);/*the $ dollar becomes visible*/
		        	  anwer.requestFocus();
		        	  
		           }
		            
		        } else if (i == 2){
		        	
		        	if(anwer.getText().equals("")) {
		        		labelchanger.setText("Please insert a number! ");
		        		anwer.requestFocus();
		        		i=2;
		        	}
		        	else {
		        		price=anwer.getText();
			        	FloatP= Float.parseFloat(price); /* the text gotten from the jtextfield it's transform into a float*/
			        	anwer.setText("");
			        	  textPane.setText("");
			        	labelchanger.setText("Insert the cash tendered");
			        	anwer.requestFocus();
			        	 i++;
		        	}
		        	
		        		       
			           
		        } else if (i == 3){
		        
		        	if(anwer.getText().equals("")) {
		        		labelchanger.setText("Please insert a number! ");
		        		anwer.requestFocus();
		        		i=3;
		        		
		        	}
		        	else {
		        		
		        		cash=anwer.getText();
			        	FloatC= Float.parseFloat(cash);
			        	 
			            labelchanger.setText("your change is:");
			            
			            float ft1 ;
			    		ft1 = FloatC-FloatP;
			    		
			    		float float2= ft1*100;
			    		int change=(int)float2;
			    		
			    		int twenties=change/2000;
			    		
			    		int twenties2=change%2000;
			    		int tens=twenties2/1000;
			    		
			    		int tens2=twenties2%1000;
			    		int fives=tens2/500;
			    		
			    		int five2=tens2%500;
			    		int one=five2/100;
			    	
			    		int one2=five2%100;
			    		int quater=one2/25;
			    		
			    		int quater2=one2%25;
			    		int dimes=quater2/10;
			    		
			    		int dimes2=quater2%10;
			    		int nickles=dimes2/5;
			    		
			    		int nickles2=dimes2%5;
			    		int pennies=nickles2/1;
			    		
			    		anwer.setText("change:"+d.format(ft1));
			    		textPane.setText("change Left:"+change+'\n'+"twenties: "+twenties+'\n'+"Tens:"+tens+'\n'+
			    				"Fives:"+ fives+'\n'+"Ones:"+one+'\n'+"Quaters:"+quater+'\n'+"Dimes:"+dimes+'\n'+
			    				"Nickels:"+nickles+'\n'+"Pennies:"+pennies);/* the '\n' make the next variable pass to the next line*/
			    		i++;
			    		btnNewButton.setText("Restart");
		        	}
		        	
		        	
		    		
		    		
		        } else if (i == 4){
		        	/* this make to restart again the whole program when the variable i is equal to 1*/
		        	btnNewButton.setText("Send");
			        textPane.setText("");
			        anwer.setText("");
			        labelchanger.setText("Insert the price of the item");
			        i=2;
		        } 

		}

	}
}
