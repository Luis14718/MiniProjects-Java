import javax.imageio.ImageIO;
import javax.swing.*; import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.File;
public class graphicdemo extends JFrame{
    public  graphicdemo (){
         super("Graphic Demo");
         setSize(400,400);
         getContentPane().add(new draw());
         setDefaultCloseOperation(EXIT_ON_CLOSE);
         setVisible(true);
    }
    public static void main(String [] ar){
        new  graphicdemo (); 
    }
 }
 class draw extends Canvas{
    public void paint(Graphics g){
    	
     g.setColor(Color.white);
     g.fillRect(0,0,getWidth(),getHeight()/2);
     g.setColor(new Color(178, 255, 255));
     g.fillRect(0,0 , 500, 300);
     g.setColor(new Color(50, 173, 255));
     g.fillRect(0,300 , 500, 300);
     g.setColor(Color.yellow);
     g.fillRoundRect(100, 100, 200,75, 20, 20);
     //g.fillRect(100,100,200,50);
     int b=0;
 	
     int x2[]={50+100,150+100,100+100};
     int y2[]={220,220,400};
     g.setColor(Color.red);
     g.fillPolygon(x2,y2,3);
    
     for (int i=0;i<2;i++) {
    	
      int x[]={50+b,150+b,100+b};
      int y[]={220,220,400};
      g.setColor(Color.red);
      g.fillPolygon(x,y,3);
      b=200;
     }
     //giving different widnows
     g.setColor(Color.blue);
      g.fillRect(120,110 , 20, 20);
      double a=0;
      g.fillRect((int) (a=(120+(120*0.25))),110 , 20, 20);
      for (int i=0;i<4;i++) {
      g.fillRect((int) (a=(a+(120*0.25))),110 , 20, 20);
     }
      // giving the tires
     g.setColor(Color.black);
     g.fillOval(120, 150, 40, 40);
     g.fillOval(250, 150, 40, 40);
     //g.fillRect(120,150,40,40);
     // giving the way to the bus the yellow part
     g.setColor(Color.yellow);
     g.fillOval(300, 50, 40, 40);
     g.setColor(Color.gray);
     g.fillRect(50,190,300,20); 
    
     //looking for the image
     BufferedImage icon =null;
     try  {
    	icon= ImageIO.read(new File("seahawk.png"));
    	
     }
     catch(Exception e) {
    	 System.out.println("file error");
     }
     g.drawImage(icon,200, 132, 400, 400, 0, 0,450,450, null);
    } 
}
