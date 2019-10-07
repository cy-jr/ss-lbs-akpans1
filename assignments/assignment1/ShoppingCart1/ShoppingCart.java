/* Shopping Cart */
import java.util.Scanner;
import java.util.Date;

public class ShoppingCart {
  public static void main(String[] args) throws Exception{
	Wallet wallet = new Wallet();
	int balance = wallet.getBalance();
	System.out.println("Welcome to Akpan's ShoppingCart. The time now is " + (new Date()).toString());
	System.out.println("Your balance: " + balance+ " credits\n");
	System.out.println("Please select your product: \n" + Store.asString());
	Scanner input = new Scanner(System.in);
	System.out.println("What do you want to buy, type e.g., pen ");
	String product = input.next();
	int price = Store.getPrice(product);
	int money = wallet.safeWithdraw(price);
	if(money>=price){
		Pocket pocket = new Pocket();
		pocket.addProduct(product);
		System.out.println("Your new balance: " + wallet.getBalance()+ " credits");
	}else{
		System.out.println("Your balance is less than the price");
		wallet.safeWithdraw(balance);
		System.out.println("Your balance is: " + wallet.getBalance()+ " credits");
	}
  }
}
