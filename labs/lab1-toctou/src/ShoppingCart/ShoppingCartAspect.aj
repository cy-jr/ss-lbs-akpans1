import java.util.Date;

public aspect ShoppingCartAspect{

	//pointcut setBalance(int newBalance) : call(* Wallet.setBalance(..));

	
   	after(int balance) : call(* Wallet.setBalance(int)) && args(balance) {
   		Date date = new Date();

   		System.out.println("New Balance.\nTime: "+date);    
   	}
}
