#include <iostream>
using namespace std;
int czyn_pier(int n){
	int i=2;
	while(n>1){
		if(n%i==0){
			cout<<i<<" ";
			n/=i;
		}else{
			i++;
		}
	}
}
int main(){
	//n-> liczba, k�tr� rozk�adamy
	int n;
	cout<<"Podaj liczbe"<<endl;
	cin>>n;
	cout<<czyn_pier(n)<<" "<<endl;
	
	return 0;	
}

