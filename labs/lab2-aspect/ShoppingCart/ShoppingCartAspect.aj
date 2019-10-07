/* ShoppingCartAspect.aj */
import java.util.Date;

public aspect ShoppingCartAspect{

Date date = new Date();
   	after(int balance) : call(* Wallet.setBalance(int)) && args(balance) {
   		System.out.println("**New Balance after purchase: "+balance);
   			System.out.println("Time: "+date);    
   	}
}

