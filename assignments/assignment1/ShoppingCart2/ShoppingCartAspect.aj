/* ShoppingCartAspect.aj */
import java.util.Date;

 public aspect ShoppingCartAspect{

 Date date = new Date();


 pointcut safeWithdraw(int price): call(* Wallet.safeWithdraw(int)) && args(price);

 public int currentBalance(){
   try{
      Wallet wallet = new Wallet();
      return wallet.getBalance();
   }catch(Exception e){
      System.out.println(e);
      return 0;
   }
 }

 public void returnDeposit(int i){
   try{
      Wallet wallet = new Wallet();
      wallet.safeDeposit(i);
   }catch(Exception e){
      System.out.println(e);
   }
   return;
 }

       before(int price) : call(* Wallet.safeWithdraw(int)) && args(price) {
         try{
            if(currentBalance() < price){
               System.out.println("Transaction fail: Insufficient funds");
               System.out.println("Current Balance: "+currentBalance());
               System.out.println("Price: "+price);
                  System.out.println();
               //Runtime.getRuntime().exit(0);
            }
         }catch(Exception e){
            System.out.print(e);
            Runtime.getRuntime().exit(0);
         }
       }

       after(int price) returning (int withdrawnAmount):
         safeWithdraw(price){
            if(withdrawnAmount < price){
               System.out.println("! *** Transaction Declined *** !");
               System.out.println("Amount requested: "+price);
               try{
                  returnDeposit(currentBalance());
                  System.out.println("Current Balance: "+withdrawnAmount);
                  Runtime.getRuntime().exit(0);
               }catch(Exception e){
                  System.out.print(e);
               }

            }
         }

 }
