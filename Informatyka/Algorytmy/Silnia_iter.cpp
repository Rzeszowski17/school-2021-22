#include <iostream>
using namespace std;

int silnia_iter(int n){
	int silnia = 1;
	for(int i=2; i<=n; i++){
		silnia*=i;
	}
	return silnia;
}
int main(){
	int n;
	cout<<"Podaj liczbe"<<endl;
	cin>>n;
	cout<<silnia_iter(n);
}
