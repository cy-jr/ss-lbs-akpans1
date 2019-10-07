### This folder contains the source code of the ShoppingCart Java application with the following source files:

(*NOTE*: The Java source files will be released just before the lab session)

* wallet.txt 
* pocket.txt
* Wallet.java: Interacts with the wallet.txt file to read and update (withdraw) from the the balance.
* Pocket.java: Interacts with the pocket.txt file which store the products have been purchased.
* Store.java: Interacts with the product options and prices.
* ShoppingCart.java: This is the main program,  a simple command line Java application, performing the following tasks:

	1. print the current balance of the user (by calling an API in Wallet object)
	2. print the product list and their prices (by calling an API in Store object)
	3. ask a product to buy
	4. check if the amount of credit is enough, if not alert and stop the execution.
	5. otherwise, withdraw the price of the product from the wallet. (by calling an API in Wallet object)
	6. add the name of the product to the pocket file (by calling an API in Pocket object)
	7. print the new balance.
	8. exit normally.
