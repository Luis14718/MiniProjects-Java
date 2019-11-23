import java.util.Random;

public class CardGame {

  public static final int NUMCARDS = 52;
  public int a=0;
  public int[] cardLoc = new int[NUMCARDS];
  public String[] suitName = {"hearts", "clubs", "spades", "diamonds"};
  public String[] rankName = {"Ace", "Two", "Three", "Four", "Five", "Six",
                                     "Seven", "Eight", "Nine", "Ten", "Jack",
                                     "Queen", "King"};
  public String[] locations = {"deck", "player", "computer"};

  public static final int DECK = 0;
  public static final int PLAYER = 1;
  public static final int COMP = 2;
  
  public static void main(String[] args) {
    new CardGame();
  } // end main

  public CardGame(){
    clearDeck();
    for (int i = 0; i < 5; i++){
      assignCard(PLAYER);
      assignCard(COMP);
    } // end for loop
    showDeck();
  
    showHand(PLAYER);
    showHand(COMP);
  
  } // end main

private void showHand(int player2) {
	
	// TODO Auto-generated method stub
	  System.out.println ();
	  System.out.println ("Cards of " + locations[player2]);
	  for(int i=0; i < NUMCARDS; i ++) {
		  if (cardLoc[i] == player2) {
			  String rank = rank(i);
			  String suit = suit(i);
			  System.out.println (rank + " of " + suit);
		  }
	  }
}
	
private String suit(int a2) {
	
	int s = a2/13;
	return suitName[s];
	
}

private String rank(int a2) {
	int r = a2%13;
	return rankName[r];
	
}



private void showDeck() {
	// TODO Auto-generated method stub
	for(int a=0; a < NUMCARDS; a ++) {
		  String rank = rank(a);
		  String suit = suit(a);
		  System.out.println (a + ") " + rank + " of " + suit + ": " + locations[cardLoc[a]]);
	}
	  }

private void assignCard(int player2) {
	// TODO Auto-generated method stub
	
	Random random = new Random();	
	int randomCard = random.nextInt (NUMCARDS);
		if (cardLoc[randomCard] == PLAYER || cardLoc[randomCard] == COMP) {
			assignCard(player2);
		}
		else {
			cardLoc[randomCard] = player2;
		}
		
	}

	

private void clearDeck() {
	 for(int a=0; a < NUMCARDS; a ++) {
		 cardLoc[0] = 0;
	
}
}}


// end class def