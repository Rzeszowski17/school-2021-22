#include <iostream>
using namespace std;
int main(){
	
	int a=0, b=0;
	int liczba[10]={};
	
	cout<<"Podaj liczbe a i b"<<endl;
	cin>>a;
	cin>>b;

	while(a){
		liczba[a%10]++;
		a/=10;
	}
	
	while(b){
		liczba[b%10]--;
		b/=10;
	}
	
	bool odp = true;
	
	for(int i=0; i<10; i++){
		if(liczba[i]!=0){
			odp = false;
			break;
		}
	}
	if(odp==true){
		cout<<"Tak"<<endl;
	}else{
		cout<<"Nie"<<endl;
	}
	
	return 0;
}
