#include <iostream>
using namespace std;
string zamiana(int n, int x){
	string sys=" ";
	while (n){
		sys=char(n%x+48)+sys;
		n/=x;
	}
	return sys;
}
int main(){
	//n->liczba, x->system
	//Zamiana z dziesiêtnego na system 
	int n=9, x=2;
	cout<<zamiana(n, x)<<endl;
	
	return 0;
}
