import java.io.File;
import java.io.IOException;
import java.io.RandomAccessFile;

public class Wallet {
   /**
    * The RandomAccessFile of the wallet file
    */  
   private RandomAccessFile file;

   /**
    * Creates a Wallet object
    *
    * A Wallet object interfaces with the wallet RandomAccessFile
    */
    public Wallet () throws Exception {
	this.file = new RandomAccessFile(new File("wallet.txt"), "rw");
    }

   /**
    * Gets the wallet balance. 
    *
    * @return                   The content of the wallet file as an integer
    */
    public int getBalance() throws IOException {
	this.file.seek(0);
	return Integer.parseInt(this.file.readLine());
    }

   /**
    * Sets a new balance in the wallet
    *
    * @param  newBalance          new balance to write in the wallet
    */

    public synchronized int safeWithdraw(int valueToWithdraw) throws Exception{
        int newb;
        int currentB = getBalance();
        if(currentB>valueToWithdraw){
            newb = currentB - valueToWithdraw;
            System.out.println("DEBUG>  currentB: "+currentB);
            System.out.println("DEBUG>  newb: "+newb);
            safeDeposit(newb);
        }else{
            newb = currentB - valueToWithdraw;
            safeDeposit(newb);
        }
        return newb;
    }

    public synchronized void safeDeposit(int valueToDeposit) throws Exception{
        // int currentB = getBalance();
        // int newb = currentB + valueToDeposit;
        setBalance(valueToDeposit);
        return;
    }

    public void setBalance(int newBalance) throws Exception {
	this.file.setLength(0);
	String str = new Integer(newBalance).toString()+'\n'; 
	this.file.writeBytes(str); 
    }

   /**
    * Closes the RandomAccessFile in this.file
    */
    public void close() throws Exception {
	this.file.close();
    }
}
