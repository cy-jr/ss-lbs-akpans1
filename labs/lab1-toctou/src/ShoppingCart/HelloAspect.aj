import java.util.Date;
public aspect HelloAspect{
	pointcut greeting(): call(* Hello.greeting(..));
	Date date = new Date();
	before(): greeting(){
          System.out.println("AOP test: \n Name: Samuel Cyril \n Date: "+date);    
    	}
   	after(): greeting(){
   		System.out.println("This is exectuted after the greeting.\nTime: "+date);    
   	}
}
