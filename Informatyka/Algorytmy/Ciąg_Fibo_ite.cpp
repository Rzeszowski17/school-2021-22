#include <iostream>
using namespace std;

int fib_ite(int n){
	int a1=1, a2=1, i=2;
	while (i<n){
		int temp=a1+a2;
		a1=a2;
		a2=temp;
		i++;
	}
	return a2;
}

int main(){
	int n;
	cout<<"Podaj nr wyrazu ciagu: ";
	cin>>n;
	
	cout<<n<<" wyraz ciagu ma wartosc "<< fib_ite(n)<<endl;

	return 0;
}
