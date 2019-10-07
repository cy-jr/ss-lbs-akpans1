public class DataRaceExample extends Thread {
	private static int shared = 0;
	int id;
	DataRaceExample(int id){
		this.id = id;
	}
	public void run(){
		System.out.println("In Thread " + id + ", shared= " + shared);
		shared++;
	}
	public static void main(String args[]){
		for (int i =0 ; i < 5; i ++){
			Thread thread = new DataRaceExample(i);
			thread.start();
		}
		System.out.println("Shared: "+shared);
	}
}

/*the code executes and produces different results because the OS schdules the processes without keeping track of the order

Each thread accesses a shared variable. Each variable can read and write to the variable. Theres no specified order to how the logic executes.

*/
