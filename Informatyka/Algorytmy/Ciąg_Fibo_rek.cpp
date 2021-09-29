#include <iostream>
using namespace std;

int fib_rek(int n){
	
	if(n<3){
		return 1;
	}else{
			return fib_rek(n-2)+fib_rek(n-1);
	}
	
}

int main(){
	int n;
	cout<<"Podaj nr wyrazu ciagu: ";
	cin>>n;
	
	cout<<n<<" wyraz ciagu ma wartosc "<<fib_rek(n)<<endl;

	return 0;
}
