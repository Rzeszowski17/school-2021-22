#include <iostream>
using namespace std;

bool pier_nie(int n){
	if(n<2){
		return false;
	}
	for(int i=2; i<=n; i++){
		if(n%i==0){
			return false;
		}
	}
	return true;
}

int main(){
	int n;
	cout<<"Algorytm sprawidz czy liczba jest l.pierwsza (1-l.pierwsza , 0-nie jest l.pierwsza)"<<endl;
	cin>>n;
	cout<<pier_nie(n);
}
