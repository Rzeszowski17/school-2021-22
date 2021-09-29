#include <iostream>
using namespace std;

bool pier_opt(int n){
	if(n==0){
		return true;
	}
	if(n<2 || n%2==0){
		return false;
	}
	for(int i=3; i*i<n; i+=2){
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
	cout<<pier_opt(n);
}
