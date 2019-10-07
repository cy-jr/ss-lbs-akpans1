#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int callee(char *str) {
 	char buf[100];
 	strcpy(buf,str);
	printf("Hello %s\n", buf);
}
int main(int argc, char *argv[]){
	callee(argv[1]);
}
